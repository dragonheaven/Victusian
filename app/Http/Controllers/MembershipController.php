<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class MembershipController extends Controller
{
    public function account() {
    	
    }

    public function imageUpload() {
    	if (array_key_exists('image', $_FILES) && $_FILES['image']['error'] == 0 ) {
            $image = $_FILES['image'];
            // $name = str_replace(" ", "_", $image['name']);
            $target_file = "uploads/".time().".png";
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                return $target_file;
            } else {
                return 'fail';
            }
        } else {
            return 'fail';
        }
    }
}
