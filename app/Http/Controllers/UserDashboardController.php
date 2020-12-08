<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Location;
use App\Models\UserRating;
use App\Models\HookRequest;
use App\Models\MatchedHook;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $amount = session('request_amount');
        $user = Auth::user();
       return view('dashboard.checkout',compact('title','service','request_id','user','amount'));
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
        // $locations = Location::all();
        return view('dashboard.requesthook',compact('title','user','services'));
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
        $settings = Setting::all()->first();

        
        HookRequest::create($data);
        Payment::create(['amount'=>$settings->request_amount,'user_id'=>Auth::user()->id,'bill_id'=>$data['request_id'],'payment_type'=>0,'payment_method'=>'rave']);
      
        

        session(['service'=>$service,'request_id'=>$data['request_id'],'request_amount'=>$settings->request_amount]);

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

    
    public function getServiceRequests($service_id){
        $title = "Requests";
        $service = Service::findOrFail($service_id);
        session(['service_amount'=>$service->price]);
        $requestsforvip = HookRequest::where('service_id',$service_id)->where('paid',1)->where('published',1)->get();
        $requestsfornormal = HookRequest::where('service_id',$service_id)->where('paid',1)->where('published',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        $availableRequests = Auth::user()->account_type == 0 ? $requestsfornormal : $requestsforvip;
        return view('service_requests',compact('title','service','availableRequests'));

    }
}
