<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Mail\HookMatched;
use App\Models\HookRequest;
use App\Models\MatchedHook;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HookRequestController extends Controller
{
    
    public function index()
    {
        $title = "Hook Requests";
        $requests = HookRequest::where('paid',1)->orderBy('matched','asc')->get();
        return view('admin.hook_requests',compact('title','requests'));
    }

    public function viewBooking($uuid){
        $request = HookRequest::where('request_id',$uuid)->get()->first();
        $bookings = Booking::where('request_id',$uuid)->where('paid',1)->where('matched',0)->get();
        return view('admin.match_hook',compact('bookings','request'));
    }

    public function matchHook(Request $request){
        $hookRequest = HookRequest::where('request_id',$request->request_id)->get()->first();
        $booking = Booking::where('booking_id',$request->booking_id)->get()->first();

        if($hookRequest->update(['matched'=>1]) && $booking->update(['matched'=>1])){
            MatchedHook::create(['hooker'=>$hookRequest->user->id,'hookee'=>$booking->user->id,'request_id'=>$hookRequest->request_id,'booking_id'=>$booking->booking_id,'match_id'=>Str::uuid()]);

            Mail::to($hookRequest->user->email)->send(new HookMatched($booking,$hookRequest,"requester"));
            Mail::to($booking->user->email)->send(new HookMatched($booking,$hookRequest,"booker"));
        }
        return redirect()->route('admin.requests.index');
    }
}
