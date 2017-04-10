<?php
//die('hello');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/blog', function() {
    return view('blog')->with('page', 'blog');
});


Auth::routes();

Route::group(['middleware' => ['emailverify']], function () {

    Route::get('/', 'MainController@showLandingPage');

    Route::get('/home', function () {
        return Redirect::to('/');
    });
});

//-------------- About ----------------
Route::group(['prefix' => 'about'], function() {
    Route::get('legion', function() {
        return view('about/legion')->with('page', 'about_legion');
    });

    Route::get('master', function() {
        return view('about/master')->with('page', 'about_master');
    });

    Route::get('student', function() {
        return view('about/student')->with('page', 'about_student');
    });

    Route::get('victusian', function() {
        return view('about/victusian')->with('page', 'about_victusian');
    });
});
///////////////////////////////////////


Route::get('/workshops/{mode}/{num}',[
    'uses' => 'WorkshopsController@showAll',
    'as' => 'workshop'
    ]);

Route::get('/eventdetail/{num}',[
    'uses' => 'WorkshopsController@showEventDetail',
    'as' => 'eventdetail'
    ]);



Route::get('/filterLocation/{nCate}/{nLoc}',[
    'uses' => 'WorkshopsController@filterLocation',
    'as' => 'filterLocation'
    ]);

Route::get('/filterMaster/{nCate}/{nId}',[
    'uses' => 'WorkshopsController@filterMaster',
    'as' => 'filterMaster'
    ]);

//Route::post('/joinevent', 'WorkshopsController@joinEvent');


Route::group(['prefix' => 'account'], function() {
	Route::get('profile', 'AccountController@accountProfile');
	Route::get('logout', 'AccountController@account');
    
});


//-----------  Profile management  -------------------/
Route::group(['prefix' => 'profile'], function() {
    Route::get('stuprofile', function() {
        return view('profile/stuprofile')->with('page', 'stuprofile'); //Page to Create Student profile page
    });

    Route::get('masterprofile', 'AccountController@showMasterProfile'); //Page to Create Master profile page

    Route::get('legionprofile', function() {
        return view('profile/legionprofile')->with('page', 'legionprofile');
    });

    Route::post('createStudentProfile', 'AccountController@createStudentProfile');   //Call to Create profile method

    Route::post('createMasterProfile', 'AccountController@createMasterProfile'); //Call to Create Master profile method

    Route::post('createLegionProfile', 'AccountController@createLegionProfile');
});

Route::get('/testpage', 'AccountController@testpage');

Route::get('/testremove/{num}',[
    'uses' => 'AccountController@testremove',
    'as' => 'testremove'
]);

Route::get('/testremoveall', 'AccountController@testremoveall');




//-----------  Authentication management -----------------//
Route::group(['prefix' => 'auth'], function() {
    Route::get('choose', function() {
        return view('authentication/sign')->with('page', 'choose');
    });

	Route::get('login', function() {
        return view('authentication/sign')->with('page', 'login');
    });

    Route::get('signup', function() {
        return view('authentication/sign')->with('page', 'signup');
    });

    Route::get('reset', function() {
        return view('authentication/sign')->with('page', 'reset');
    });
    
    Route::get('welcome', function() {
        return view('authentication/sign')->with('page', 'welcome');
    });

    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'Auth\LoginController@login');
});


Route::get('/welcome', function() {
    return view('authentication/welcome')->with('page', 'Welcome');
});

Route::group(['prefix' => 'dashboard'], function() {

    Route::get('dashboard', 'EventController@showAllEvents');
    Route::get('myevents', 'EventController@showMyEvents');

    Route::get('createevent', function() {
        return view('dashboard/createevent')->with('page', 'dashboard_createevent');
    });

    Route::get('profile', function() {
        return view('dashboard/profile')->with('page', 'dashboard_profile');
    });
});

Route::post('/image-upload', 'MembershipController@imageUpload');


//------------  Event management ------------------------//
Route::group(['prefix' => 'event'], function() {
    Route::get('createevent' ,function() {
        return view('event/createEvent')->with('page', 'event_create');
    });

    Route::get('createtravel', function() {
        return view('event/createTravel')->with('page', 'event_travel_create');
    });

    Route::post('create', 'EventController@create');

    Route::get('myevent', 'EventController@showMyEvents');

    Route::post('dropEvent', 'EventController@dropEvent');
});

Route::get('/mystudents', function () {
    return view('event/mystudents')->with('page', 'mystudents');
});

Route::get('/mystudents/{num}',[
    'uses' => 'EventController@showJoinedStudents',
    'as' => 'mystudents'
]);

Route::get('/oversee', 'WorkshopsController@overSee');

Route::post('/addVenue', 'WorkshopsController@addVenue');

Route::get('/approve/{num}/{nmode}',[
    'uses' => 'WorkshopsController@approve_deny_event',
    'as' => 'approve'
    ]);

//-----------  Social Authentication -------------------//
Route::get('/socialauth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/socialauth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//----------- Calendar View ----------------------------

Route::get('/calendar', 'WorkshopsController@showCalender');


Route::get('/getEventDataXML', 'WorkshopsController@getEventDataXML');  //fetch event for calendar
Route::post('/cancelEvent', 'WorkshopsController@cancelEvent');  //cancel event from calendar
Route::post('/checkEvent', 'WorkshopsController@checkEvent');    //checkin event after attended the event


//----------- Main Controller ------------------------//
Route::post('/getfeed', 'MainController@getfeed');                       //collect upcoming events for student & master
Route::post('/getfeed2', 'MainController@getfeed2');                     //collect newly created events to approve for legion

Route::get('/stripe', 'AccountController@createStripeAccount');

//----------- Purchase Controller -------------------//
Route::post('/eventOrder', 'PurchaseController@eventOrder');
Route::post('/eventOrder2', 'PurchaseController@eventOrder2');
Route::post('/checkPaymentRegister', 'PurchaseController@checkPaymentRegister');

Route::get('/testWebCam', function() {
    return view('testWebCam');
});

//-----------  Leaderboard --------------------------//

Route::get('/leaderboard', 'WorkshopsController@showLeaderBoard');

//----------- soulcation -------------------------//

Route::get('/soulcation', function() {
    return view('workshops/travel')->with('page', 'soulcation');
});

//----------- Become a Legion -----------//
Route::get('/legiontest', function () {
    return view('bealegion')->with('page', 'becomelegion');
});

