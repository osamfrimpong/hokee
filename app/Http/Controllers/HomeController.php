<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Service;
use App\Models\UserRating;
use App\Models\HookRequest;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('welcome',compact('services','ratings','requestsforvip','requestsfornormal'));
    }

    public function about() {

        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('about',compact('services','ratings','requestsforvip','requestsfornormal'));
    
    }
    public function hotels() {

        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('hotels',compact('services','ratings','requestsforvip','requestsfornormal'));
    
    }
    public function enhancers() {

        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('enhancers',compact('services','ratings','requestsforvip','requestsfornormal'));
    
    }
    public function contactUs() {

        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('contactUs',compact('services','ratings','requestsforvip','requestsfornormal'));
    
    }
    public function roomRentals() {

        $services = Service::orderBy('title','asc')->get();
        $ratings = UserRating::where('approved',1)->orderBy('created_at','desc')->get();
        $requestsforvip = HookRequest::where('paid',1)->get();
        $requestsfornormal = HookRequest::where('paid',1)->where('created_at','<=',Carbon::now()->subHours(1))->get();
        return view('roomRentals',compact('services','ratings','requestsforvip','requestsfornormal'));
    
    }
}
