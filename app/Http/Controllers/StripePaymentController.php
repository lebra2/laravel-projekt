<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    // /**
    //  * success response method.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function stripe()
    // {
    //     return view('stripe');
    // }
    
    // /**
    //  * success response method.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function stripePost(Request $request)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
    //     Stripe\Charge::create ([
    //             "amount" => 100 * 100,
    //             "currency" => "usd",
    //             "source" => $request->stripeToken,
    //             "description" => "Test payment from LaravelTus.com." 
    //     ]);
      
    //     Session::flash('success', 'Payment successful!');
              
    //     return back();
    // }

    public function pay(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ]);
    
        $cartSum = collect(session()->get('cart'))->reduce(function ($carry, $item){
            // dd($item['total']->getAmount());
            return $carry + $item['total']->getAmount();
        });
        dd($cartSum);
        

        Stripe::setApiKey(config('services.stripe.sk'));
        $paymentIntent = PaymentIntent::create ([
            'amount' => intval($cartSum)
        ]);

    }
}