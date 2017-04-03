<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Session;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\RegistersUsers;

use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;




class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use VerifiesUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/auth/welcome';
    protected $redirectAfterVerification = '/auth/choose';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   

    protected function create(array $data)
    {

        return User::create([
            'roleid' => NULL,            
            'name' => $data['name'],
            'email' => $data['email'],           
            'password' => bcrypt($data['password']),       
            'provider' => NULL,
            'provider_id' => NULL,
            'actived' => NULL,
            'image_url' => NULL,
        ]);
    }


    public function register(Request $request)
    {
        $data = $request->all();
        
        //form validation
        $validator = Validator::make($data, [  
            'name' => 'bail|required|unique:users',            
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'tnc' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('/auth/signup') 
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->create($data);        

        UserVerification::generate($user);

        Session::put('userid', $user->id);
        Session::put('username', $user->name);
        Session::put('useremail', $user->email);
        
        UserVerification::send($user, 'Please verify your email address');

        Auth::login($user);
        
        return redirect($this->redirectPath());
    }

}
