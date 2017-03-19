<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use Auth;
use App\Event\Event;
use DateTime;
use DateTimeZone;
use Laracast\Flash;

class WorkshopsController extends Controller
{
	/**
     * Show all the events
     *
     * @return \Illuminate\Http\Response
     */
    
    

    public function filterArchivedEvents()
    {
        $date = date('y-m-d');
        DB::table('event')->where('expiredate', '<', $date)->update(['state' => '3']);
    }

    public function showAll($mode, $num) {
        
        //filter archived events on this moment
        $this->filterArchivedEvents();
        $events = DB::table('event')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->where('state', '0')
        ->select('event.*', 'users.name', 'users.image_url')
        ->get();
        
        //if category = 0, display all, else filter by $num
        if ($num != '0') {
            foreach ($events as $key => $event) { 
                if (strstr($event->category, $num) == false) {
                    unset($events[$key]);
                }
            }
        }

        //extract information of masters
        $masters = DB::table('users')
        ->where('roleid', '<', '4')
        ->select('id', 'name')
        ->get();

        //calc the count of events that each master created.
        foreach ($masters as $key => $master) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->createdby == $master->id) $count++;
            }
            $masters[$key]->count = $count;
        }

        //calc the count of events in each venue
        $venues = DB::table('event')
        ->groupby('venue')
        ->select('venue')
        ->get();

        foreach ($venues as $key => $venue) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->venue == $venue->venue) $count++;
            }
            $venues[$key]->count = $count;                 
        }             

        $events->nCategory = $num;
    	return view('workshops/workshops', [
            'events' => $events,
            'category' => strtoupper($mode),
            'masters' => $masters,
            'venues' => $venues,
            ])->with('page', 'workshops_'.$mode);
    }
    
    public function  showEventDetail($num) {

        
        $this->filterArchivedEvents();
        $event = DB::table('event')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->where([['event.id', '=', $num], ['state', '=', '0'],])
        ->select('event.*', 'users.name', 'users.image_url', 'users.roleid', 'users.email')
        ->get();

        //get users list joined this event
        $users = DB::table('events_users')
        ->join('users', 'users.id', '=', 'events_users.userid')
        ->where('eventid', $num)
        ->select('users.*')
        ->get();

        //check if user has already joined with this event
        $isjoined = false;
        foreach ($users as $key => $user) {
            if($user->id == Session::get('userid'))
            {
                $isjoined = true;
                break;
            }
        }

        //check if user has level enough to join this event
        $level_required = 0;
        $user_rank = 0;
        $canjoin = false;
        $level_required = DB::table('event')
        ->where('id', $num)
        ->select('level_required');
        if(Session::get('userrole') == 4)
            $user_rank = DB::table('tb_student')
                         ->where('userid', Session::get('userid'))
                         ->select('rank');   
        if(Session::get('userrole') == 3)
            $user_rank = DB::table('masters')
                         ->where('userid', Session::get('userid'))
                         ->select('rank');
        if($user_rank >= $level_required) $canjoin = true;


        return view('workshops/eventdetail', [
            'event' => $event[0],
            'users' => $users,
            'isjoined' => $isjoined,
            'canjoin' => $canjoin,
            ])->with('page', 'workshops_eventdetail');
    }

    public function filterLocation($num, $nLoc) {

        $cateName = array('0'=>'all',
                             '1'=>'Coaching',
                             '2'=>'creative',
                             '3'=>'cooking',
                             '4'=>'yoga',
                             '5'=>'film',
                             '6'=>'economy',
                             '7'=>'dance',
                             '8'=>'music',
                             '9'=>'fitness',
                            );

        //filter archived events on this moment
        $this->filterArchivedEvents();
        $events = DB::table('event')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->where('state', '0')
        ->select('event.*', 'users.name', 'users.image_url')
        ->get();
        
        //if category = 0, display all, else filter by $num
        if ($num != '0') {
            foreach ($events as $key => $event) { 
                if (strstr($event->category, $num) == false) {
                    unset($events[$key]);
                }
            }
        }

        //extract information of masters
        $masters = DB::table('users')
        ->where('roleid', '<', '4')
        ->select('id', 'name')
        ->get();

        //calc the count of events that each master created.
        foreach ($masters as $key => $master) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->createdby == $master->id) $count++;
            }
            $masters[$key]->count = $count;
        }

        //calc the count of events in each venue
        $venues = DB::table('event')
        ->groupby('venue')
        ->select('venue')
        ->get();

        foreach ($venues as $key => $venue) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->venue == $venue->venue) $count++;
            }
            $venues[$key]->count = $count;                 
        }             

        foreach ($events as $key => $event) {
            if ($event->venue != $nLoc) {
                unset($events[$key]);
            }
        }

        $mode = $cateName[$num];
        $events->nCategory = $num;
        return view('workshops/workshops', [
            'events' => $events,
            'category' => strtoupper($mode),
            'masters' => $masters,
            'venues' => $venues,
            ])->with('page', 'workshops_'.$mode);
    }

    public function filterMaster($num, $nId)
    {
        $cateName = array('0'=>'all',
                             '1'=>'Coaching',
                             '2'=>'creative',
                             '3'=>'cooking',
                             '4'=>'yoga',
                             '5'=>'film',
                             '6'=>'economy',
                             '7'=>'dance',
                             '8'=>'music',
                             '9'=>'fitness',
                            );

        //filter archived events on this moment
        $this->filterArchivedEvents();
        $events = DB::table('event')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->where('state', '0')
        ->select('event.*', 'users.name', 'users.image_url')
        ->get();
        
        //if category = 0, display all, else filter by $num
        if ($num != '0') {
            foreach ($events as $key => $event) { 
                if (strstr($event->category, $num) == false) {
                    unset($events[$key]);
                }
            }
        }

        //extract information of masters
        $masters = DB::table('users')
        ->where('roleid', '<', '4')
        ->select('id', 'name')
        ->get();

        //calc the count of events that each master created.
        foreach ($masters as $key => $master) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->createdby == $master->id) $count++;
            }
            $masters[$key]->count = $count;
        }

        //calc the count of events in each venue
        $venues = DB::table('event')
        ->groupby('venue')
        ->select('venue')
        ->get();

        foreach ($venues as $key => $venue) {
            $count = 0;
            foreach ($events as $ekey => $event) {
                if($event->venue == $venue->venue) $count++;
            }
            $venues[$key]->count = $count;                 
        }             

        foreach ($events as $key => $event) {
            if ($event->createdby != $nId) {
                unset($events[$key]);
            }
        }

        $mode = $cateName[$num];
        $events->nCategory = $num;
        return view('workshops/workshops', [
            'events' => $events,
            'category' => strtoupper($mode),
            'masters' => $masters,
            'venues' => $venues,
            ])->with('page', 'workshops_'.$mode);
    }

    public function joinEvent()
    {
        if(!Auth::check())
        {
            return redirect('/auth/login');
        }
        

        $eventid = $_POST['eventid'];
        $userid = Session::get('userid');

        //register joining information                                                                                     
        try {
            DB::table('events_users')->insert([
                'eventid' => $eventid,
                'userid' => $userid,
            ]);
        }catch(\Exception $e)
        {
            echo $e->getMessage();
        }

        //show event_detail page again.
        flash()->overlay('You successfully joined to this event', 'Congratulations '.Session::get('username'));
        return $this->showEventDetail($eventid);
        //return Redirect::back()->withErrors(['msg', 'joined']);
    }

    public function overSee()
    {
        //get masters information to show
        $masters = DB::table('masters')
        ->join('users', 'users.id', '=', 'masters.userid')
        ->select('masters.*', 'users.*')
        ->get();

        //get events information to approve or not
        $events = DB::table('event')
        ->where('state', '0')
        ->join('users', 'users.id', '=', 'event.createdby')
        ->select('event.*', 'users.name')
        ->get();


        return view('event/oversee', [
            'masters' => $masters,
            'events' => $events,
            ])->with('page', 'oversee');
    }

    public function approve_deny_event($num, $nmode)
    {

        //if mode  = 1 , approve the event
        if($nmode == 1)
            DB::table('event')->where('id', $num)
                              ->update(['state' => '1']);

        //if mode = 0 , deny the event
        if($nmode == 0)
            DB::table('event')->where('id', $num)
                              ->update(['state' => '2']);

        return Redirect::back()->withErrors(['msg', 'approved']);                      
    }

    public function addVenue(Request $request)
    {
        $data = $request->all();
        try {
            
        }catch(\Exception $e)
        {
            echo $e->getMessage();
        }

        return $this->overSee();
    }

    //Parse Date time format
    public function parseDateTime($string, $timezone=null) {
        $date = new DateTime(
            $string,
            $timezone ? $timezone : new DateTimeZone('UTC')
                // Used only when the string is ambiguous.
                // Ignored if string has a timezone offset in it.
        );
        if ($timezone) {
            // If our timezone was ignored above, force it.
            $date->setTimezone($timezone);
        }
        return $date;
    }

    public function getEventDataXML(Request $request)
    {
        // Short-circuit if the client did not give us a date range.
        if (!isset($_GET['start']) || !isset($_GET['end'])) {
            die("Please provide a date range.");
        }

        $range_start = $this->parseDateTime($_GET['start']);
        $range_end = $this->parseDateTime($_GET['end']);

        // Parse the timezone parameter if it is present.
        $timezone = null;
        if (isset($_GET['_'])) {
            $timezone = new DateTimeZone('UTC');
        }
        
        $input_arrays = array();
        $input_arrays = DB::table('event')
        ->join('events_users', 'event.id', 'events_users.eventid')
        ->where('userid', Session::get('userid'))
        ->select('eventid', 'title', 'startdate', 'expiredate', 'type')->get();


        // Accumulate an output array of event data arrays.
        $output_arrays = array();


        foreach ($input_arrays as $array) {

            // Convert the input array into a useful Event object
            $event = new Event($array, $timezone);

            // If the event is in-bounds, add it to the output
            if ($event->isWithinDayRange($range_start, $range_end)) {
                $output_arrays[] = $event->toArray();
            }
        }

        // Send JSON to the client.
        echo json_encode($output_arrays);
    }

    public function cancelEvent(Request $request) 
    {
        DB::table('events_users')->where([
            ['eventid', '=', $request->id],
            ['userid', '=', Session::get('userid')],
        ])->delete();
        

        return "success";
        
    }
}
