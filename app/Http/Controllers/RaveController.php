<?php

namespace App\Http\Controllers;

use Rave;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\HookRequest;
use Illuminate\Http\Request;

class RaveController extends Controller
{
    /**
   * Initialize Rave payment process
   * @return void
   */
  public function initialize()
  {
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL
    // $rave = new Rave();
    Rave::initialize(route('callback'));
  }

  /**
   * Obtain Rave callback information
   * @return void
   */
  public function callback()
  {
    $res_json = json_decode(request()->request->get('resp'));
    $txref = $res_json->data->transactionobject->txRef;
    $data = Rave::verifyTransaction($txref);
    $chargeResponsecode = $data->data->chargecode;
    $chargeAmount = $data->data->amount;
    $chargeCurrency = $data->data->currency;
    $amount = $data->data->amount;
    $currency = "GHS";
    $payment =  Payment::where('bill_id',$txref)->get()->first();


    if(($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($amount == $payment->amount)  && ($chargeCurrency == $currency)){
       
        if($payment->payment_method == 0)
        {
        $hook_request = HookRequest::where('request_id',$txref)->get()->first();
        $hook_request->update(['paid'=>1]);
        }
        elseif($payment->payment_method == 1)
        {
          $booking = Booking::where('booking_id',$txref)->get()->first();
          $booking->update(['paid'=>1]);
        }
        $payment->update(['status'=>1]);
        session()->flush();
        return redirect()->route('user.home');
      }
      else{
        dd("There was a problem validating your payment");
      }
      

  }

  
}
