<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Donation;
use Auth;

class DonationController extends Controller
{
    public function getDonationIndex(){
        return view('frontend.donation.donation');
    }

    public function postDonation(Request $request){
        if (!$request->input('name')) {
            return redirect()->back();
        }

        Stripe::setApiKey('sk_test_KAdqAU3rr1e3nrrDDtJT71je');

        try{
            $charge = Charge::create(array(
                "amount" => $request->input('amount') * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge"
            ));

            $donation = new Donation();
            $donation->name = $request->input('name');
            $donation->amount = $request->input('amount');
            $donation->save();

        }catch(\Exception $e){
            return redirect()->route('donation')->with('error', $e->getMessage());
        }

        return redirect()->route('donation')->with('success', trans('user.thanksForDonation'));
    }
}
