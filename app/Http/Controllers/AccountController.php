<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\Master;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class AccountController extends Controller
{

	protected $redirectTo = '/';
    //
    //
    public function accountProfile() {
    	return view('account/profile')->with('page', 'account_profile');
    }

    public function accountLogout() {
    	return view('account/logout')->with('page', 'account_logout');
    }

    public function certUpload() {
        if(array_key_exists('file-cert', $_FILES) && $_FILES['file-cert']['error'] == 0 )
        {
            $cert = $_FILES['file-cert'];
            $target_file = "uploads/certificate/".time();
            if(move_uploaded_file($cert['tmp_name'], $target_file))
            {
                return $target_file;
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

    public function avatarUpload() {
        if (array_key_exists('file_avatar', $_FILES) && $_FILES['file_avatar']['error'] == 0 ) {
            $image = $_FILES['file_avatar'];
            $target_file = "uploads/images/avatar/".time().".png";
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                return $target_file;
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }

    public function multipleImageUpload() {
        $path = array();
        if (isset($_FILES['file'])) {
            foreach ($_FILES['file']['tmp_name'] as $key => $image) {
                $outname = time().$key.".png";
                $target_file = "uploads/images/portfolio/".$outname;
                if (move_uploaded_file($image, $target_file)) {
                    array_push($path, $target_file);
                }
            }
            return $path;
        } else {
            return NULL;
        }
    }

    private function stu_validator(array $data) {

        return Validator::make($data, [            
            'firstName' => 'required',
            'lastName' => 'required',
        ]);
    }

    public function createStudentProfile(Request $request) {
        $input = $request->all();  
        $this->stu_validator($input)->validate();   

        if(DB::table('tb_student')->insert([
            'userid' => Session::get('userid'),
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
            'gender' => $input['gender'],
            'dateofbirth' => $input['dob'],
            'hobby' => $input['hobby'],
            'motto' => $input['motto'],
            'aboutme' => $input['aboutme'],
        ])){
            //Update actived field of 'users' table
            DB::table('users')
                    ->where('users.id', Session::get('userid'))
                    ->update([
                    'roleid' => 4,
                    'actived' => 1,
                    ]);
            //If user updated his image, update 'image_url' field of 'users' table
            if($input['image'] != 'none')
            {
                DB::table('users')
                    ->where('users.id', Session::get('userid'))
                    ->update([
                        'image_url' => $input['image'],
                    ]);

                Session::put('userImageURL', $input['image']);
            }

            //Update session information
            Session::put('userrole', 4);                
            return redirect('/');
        }else {
            return redirect('profile/stuprofile')->with('page', 'stuprofile')
                                                 ->with('status', 'failed');
        }
    }

    public function showMasterProfile() {
        return view('profile/masterprofile')->with('page', 'masterprofile');
    }
    
    public function createMasterProfile(Request $request) {
        $data = $request->all();

        $portfolio_url_id = NULL;
        $cert_path = NULL;

        //avatar_file_upload
        if(isset($data['file_avatar']))
        {
            $path = $this->avatarUpload();
            if($path != NULL) {
                DB::table('users')->where('id', Session::get('userid'))
                                  ->update(['image_url' => $path]);   
                Session::put('userImageURL', $path);
            }
        }

        //certification upload
        if(isset($data['file-cert']))
        {
            $cert_path = $this->certUpload();
        }

        //multiple_portfolio_image_upload
        if(isset($data['file']))
        {
            DB::table('portfolio_url')->insert([
                'userid' => Session::get('userid'),
            ]);
            $name = 'img';
            $i = 1;
            $path = $this->multipleImageUpload();
            
            foreach ($path as $p) {
                DB::table('portfolio_url')->where('userid', Session::get('userid'))
                                          ->update([$name.$i++ => $p]);
            }

            $row = DB::table('portfolio_url')->where('userid', Session::get('userid'))
                                             ->first();
            $portfolio_url_id = $row->id;
        }

        //validation..
        $category = '';
        foreach ($data['category'] as $cate) {
            $category = $category.$cate.', ';
        }

        if(DB::table('masters')->insert([
            'userid' => Session::get('userid'),
            'legionid' => $data['legionindex'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'dateofbirth' => $data['dob'],
            'phonenum' => $data['phonenum'],
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'postalcode' => $data['postalcode'],
            'teachcategory' => $category,
            'currency' => $data['currency'],
            'teachsince' => $data['teachsince'],
            'portfolioid' => $portfolio_url_id,
            'certificate_url' => $cert_path,
            'motto' => $data['motto'],
            'aboutme' => $data['aboutme'],
        ])){            
            DB::table('users')->where('id', Session::get('userid'))
                              ->update(['roleid' => '3', 'actived' => '1']);
            //Update session information
            Session::put('userrole', 3); 

            return redirect('/');
        }
    }

    public function createLegionProfile(Request $request) {
        $data = $request->all();

        $portfolio_url_id = NULL;

        //avatar_file_upload
        if(isset($data['file_avatar']))
        {
            $path = $this->avatarUpload();
            if($path != NULL) {
                DB::table('users')->where('id', Session::get('userid'))
                                  ->update(['image_url' => $path]);   
                Session::put('userImageURL', $path);
            }
        }

        //multiple_portfolio_image_upload
        if(isset($data['file']))
        {
            DB::table('portfolio_url')->insert([
                'userid' => Session::get('userid'),
            ]);
            $name = 'img';
            $i = 1;
            $path = $this->multipleImageUpload();
            
            foreach ($path as $p) {
                DB::table('portfolio_url')->where('userid', Session::get('userid'))
                                          ->update([$name.$i++ => $p]);
            }

            $row = DB::table('portfolio_url')->where('userid', Session::get('userid'))
                                             ->first();
            $portfolio_url_id = $row->id;
        }

        //validation..
        $category = '';
        foreach ($data['category'] as $cate) {
            $category = $category.$cate.', ';
        }

        if(DB::table('legions')->insert([
            'userid' => Session::get('userid'),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'dateofbirth' => $data['dob'],
            'phonenum' => $data['phonenum'],
            'address' => $data['address'],
            'city' => $data['city'],
            'country' => $data['country'],
            'postalcode' => $data['postalcode'],
            'teachcategory' => $category,
            'currency' => $data['currency'],
            'teachsince' => $data['teachsince'],
            'portfolioid' => $portfolio_url_id,
            'motto' => $data['motto'],
            'aboutme' => $data['aboutme'],
        ])){            
            DB::table('users')->where('id', Session::get('userid'))
                              ->update(['roleid' => '2', 'actived' => '1']);
            //Update session information
            Session::put('userrole', 2); 

            return redirect('/');
        }
    }

    public function createStripeAccount() 
    {
        $customer = Stripe::customers()->create([
            'email' => 'jupiter.kgh720@gmail.com',
        ]);

        $charge = Stripe::charges()->create([
            'customer' => 'cus_AEyMZrKvEAu5iY',
            'currency' => 'USD',
            'amount'   => 50.49,
        ]);
        echo $charge['id'];
    }
}
