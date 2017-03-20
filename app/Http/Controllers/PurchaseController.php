<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;
use App\User;
use Auth;

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
		return $customer; 	
    }

    public function eventOrder(Request $request) 
    {
    	$token = $_POST['stripeToken'];
    	$email = $_POST['stripeEmail'];

    	$customer = User::where('id', Session::get('userid'))->value('stripe_customer_id');
    	if(!$customer)
    		$customer = $this->paymentRegister($token);
		


		// Charge the Customer instead of the card:
		$charge = \Stripe\Charge::create(array(
		  "amount" => 1000,
		  "currency" => "usd",
		  "customer" => $customer->id
		));

		// YOUR CODE: Save the customer ID and other info in a database for later.

		// YOUR CODE (LATER): When it's time to charge the customer again, retrieve the customer ID.
		$charge = \Stripe\Charge::create(array(
		  "amount" => 1500, // $15.00 this time
		  "currency" => "usd",
		  "customer" => $customer_id
		));


		echo $customer;
		exit();

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
