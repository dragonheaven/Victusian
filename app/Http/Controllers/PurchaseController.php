<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;


use Cartalyst\Stripe\Stripe;

class PurchaseController extends Controller
{
    public function __construct()
	{
		\Stripe\Stripe::setApiKey('sk_test_Ymv34sj3WFKGSqbAtmGKljsx');
	}

	public function paymentRegister($token)
    {
    	$customer = NULL;
    	$customer = \Stripe\Customer::create(array(
		  "source" => $token,
		));

        //save customer_id into table Users
        DB::table('users')
            ->where('id', Session::get('userid'))
            ->update(['stripe_customer_id' => $customer->id]);
		return $customer; 	
    }

    public function eventOrder(Request $request) 
    {
    	$token = $_POST['stripeToken'];
    	$email = $_POST['stripeEmail'];

    	$customer = NULL;
    	$customerid = User::where('id', Session::get('userid'))->value('stripe_customer_id');
    	if(!$customerid)
        {
            $customer = $this->paymentRegister($token);
            $customerid = $customer->id;
        }


		// YOUR CODE: Save the customer ID and other info in a database for later.
        $event_id = $_POST['event_id'];
        $price = DB::table('event')
            ->where('event.id', $event_id)
            ->value('price');

        DB::table('events_users')
            ->insert([
                'eventid' => $event_id,
                'userid' => Session::get('userid'),
                'state' => 0,
            ]);

        // Charge the Customer instead of the card:
        $charge = \Stripe\Charge::create(array(
            "amount" => $price,
            "currency" => "usd",
            "customer" => $customerid
        ));

        return Redirect::back()->with('status', 'success')->with('message', 'You successfully joined to this event');

    }

    public function eventOrder2(Request $request)
    {


        $customerid = User::where('id', Session::get('userid'))->value('stripe_customer_id');

        // YOUR CODE: Save the customer ID and other info in a database for later.
        $event_id = $_POST['event_id'];
        $price = DB::table('event')
            ->where('event.id', $event_id)
            ->value('price');

        DB::table('events_users')
            ->insert([
                'eventid' => $event_id,
                'userid' => Session::get('userid'),
                'state' => 0,
            ]);

        // Charge the Customer instead of the card:
        $charge = \Stripe\Charge::create(array(
            "amount" => $price,
            "currency" => "usd",
            "customer" => $customerid
        ));

        return Redirect::back()->with('status', 'success')->with('message', 'You successfully joined to this event');

    }

    public function isPaymentRegistered($id)
    {
    	if(User::where('id', Session::get('userid'))->value('stripe_customer_id') != NULL)
    		return true;
    	return false;
    }

    public function checkPaymentRegister(Request $request)
    {
    	if($this->isPaymentRegistered(Session::get('userid')))
    		return "yes";
    	return "no";
    }
}
