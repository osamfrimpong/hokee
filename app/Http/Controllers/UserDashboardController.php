<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Service;
use App\Models\Location;
use App\Models\UserRating;
use App\Models\HookRequest;
use App\Models\MatchedHook;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
   
    public function index(){
        $title = "Home";
        $user = Auth::user();
        $totalRequests = HookRequest::where('hookee',$user->id)->where('paid',1)->get()->count();
        $matchedRequests = HookRequest::where('hookee',$user->id)->where('paid',1)->where('matched',1)->get()->count();
        $matchedHooks = MatchedHook::where('hooker',$user->id)->with('owner')->with('booker')->orWhere('hookee',$user->id)->orderBy('id','desc')->get()->take(10);

        // dd($matchedHooks);

        return view('dashboard.home',compact('title','totalRequests','matchedRequests','user','matchedHooks'));
    }
    

    public function checkout(){
        $title = "Checkout";
        $service = session('service');
        $request_id = session('request_id');
        $user = Auth::user();
       return view('dashboard.checkout',compact('title','service','request_id','user'));
    }

    public function userprofile(){
        $title = "UserProfile";
        $user = Auth::user();
        return view('dashboard.userprofile',compact('title','user'));
    }
    public function ratings(){
        $title = "Ratings";
        $user = Auth::user();
        return view('dashboard.ratings',compact('title','user'));
    }

    public function requesthook(){
        $title = "RequestHook";
        $user = Auth::user();
        $services = Service::all();
        $locations = Location::all();
        return view('dashboard.requesthook',compact('title','user','services','locations'));
    }

    public function addrequest(Request $request){
        $request->validate([
            'message' => 'required|string:255',
            'location' => 'required|string:255'
        ]);
        $data = $request->all();
        $data['hookee'] = Auth::user()->id;
        $data['request_id'] = Str::uuid();

        $service = Service::findOrFail($request->service_id);

        
        HookRequest::create($data);
        Payment::create(['amount'=>$service->price,'user_id'=>Auth::user()->id,'bill_id'=>$data['request_id'],'payment_type'=>0,'payment_method'=>'rave']);
      
        

        session(['service'=>$service,'request_id'=>$data['request_id']]);

        return redirect()->route('user.checkout');
    }


    public function rate(Request $request){
        $request->validate([
            'message' => 'required|string:255'
        ]);

        UserRating::create(['message'=>$request->message,'user_id'=>Auth::user()->id]);

        return redirect()->route('user.ratings');
    }

    public function viewRequest($request_id){
        $hookRequest = HookRequest::where('request_id',$request_id)->get()->first();
        return view('dashboard.viewrequest',compact('hookRequest'));
    }
}
