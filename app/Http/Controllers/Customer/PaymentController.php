<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Card;
use Stripe\Customer;
use Stripe\Stripe;

class PaymentController extends Controller {
	public function charge( Request $request ) {

//		Stripe::setApiKey(env('STRIPE_SECRET'));
//		$customer = Customer::create( array(
//			'email'  => auth()->user()->email,
//			'source' => $request->stripeToken
//		) );

		dd(auth()->user()->charge(100));
	}
}
