<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class DonateController extends Controller
{
    public function storePayment(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'name' => 'min:3'


        ]);
        $data = array(
            'email' => $request->email,
            'name' => $request->name
        );



        // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_Tz2zoQSqOfQp27Qk0aMOaa4X");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 100,
            'currency' => 'usd',
            'description' => 'bishal',
            'source' => $token,
        ]);
        Mail::send('emails.thankdonate', $data, function($message) use ($data){
            $message->to($data['email']);
            $message->from('great.shah222@gmail.com');
        });
        Mail::send('emails.admindonate', $data, function($message) use ($data){
            $message->to('t5shbi00@students.oamk.fi');
            $message->from('great.shah222@gmail.com');
        });

        return redirect()->route('name')  ;  }

}
