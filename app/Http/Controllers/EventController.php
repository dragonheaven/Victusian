<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
// use App\Event\Event;

class EventController extends Controller
{
    //
    
    // public function __construct()
    // {
    //     // $events = new Event(); 
    // }

    private function redirectPath()
    {
    	return "/dashboard/myevents";
    }

    public function filterArchivedEvents()
    {
        $date = date('y-m-d');
        DB::table('event')->where('expiredate', '<', $date)->update(['state' => '3']);
    }

    private function validator(array $data) {

    	return Validator::make($data, [            
            'title' => 'required',
            'description' => 'required',
            'tagline' => 'required',
            'category' => 'required',
            'available_from' => 'required',
            'image_upload' => 'required',
            'price' => 'required|integer',            
        ]);
    }

    public function create(Request $request) {

    	$input = $request->all();
		$this->validator($input)->validate();

        //get category information
        $category = '';
        if (!empty($_POST['category'])) {
            $i = 0;
            foreach ($_POST['category'] as $value) {
                # code...
                $category = $category.$value.', ';
            }
        }

        //allow free trial or not...
        $trial = 0;
        if (!empty($_POST['trialable'])) {
            # code...
            $trial = 1;
        }     

        //date_default_timezone_set('Austria/Vienna');
        $create_date = date('y-m-d');

		if (DB::table('event')->insert([
            'title' => $input['title'],
            'description' => $input['description'],
            'tagline' => $input['tagline'],
            'category' => $category,
            'type' => $input['type'],
            'level_required' => $input['level'],
            'venue' => $input['venue'],
            'trialable' => $trial,
            'createdby' => Session::get('userid'),
            'startdate' => $input['available_from'],
            'expiredate' => $input['available_to'],
            'createdate' => $create_date,
            'img_url' => $input['image'],
            'rate' => 0,
            'price' => $input['price'],
            'reviewed' => 0,
        ])) {
			return redirect('/event/myevent')->with('status', 'success');
        } else {
        	return redirect("/event/creatEvent")->with('status', 'fail');
        }
    }

    

    public function showMyEvents()
    {
        $this->filterArchivedEvents();
        $nCompleted = 0; $nProcessing = 0; $nClosed = 0; $nArchived = 0;

        $events = DB::table('event')
        ->select('event.*')
        ->where('createdby', Session::get('userid'))
        ->get();

        foreach ($events as $event) {
            $s = $event->state;
            if ($s == 0) {
                $nProcessing ++;
            }
            elseif ($s == 1) {
                $nCompleted ++;
            }
            elseif ($s == 2) {
                $nClosed ++;
            }
            elseif ($s == 3) {
                $nArchived++;
            }
        }

        $events = DB::table('event')
        ->select('event.*')
        ->where([['createdby', '=', Session::get('userid')], ['state', '=', '0'],])
        ->get();        
        return view('event/myevent', ['events' => $events,
                                     'nProcessing' => $nProcessing,
                                     'nCompleted' => $nCompleted,
                                     'nArchived' => $nArchived,
                                     'nClosed' => $nClosed])->with('page','event_myevent');
    }

    public function showAllEvents()
    {
        $this->filterArchivedEvents();

        $events = DB::table('event')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->where('state', '0')
        ->select('event.*', 'users.displayName', 'users.image_url')
        ->get();
      
        return view('dashboard/dashboard', ['events' => $events])->with('page','dashboard');
    }

    public function dropEvent() 
    {
        if (DB::table('event')->where('id', $_POST['id'])->update(['state' => $_POST['mode']]))
        {
            return "success";
        }
        return "fail";
    }
    
}
