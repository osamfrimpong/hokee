<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\UserRating;
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
        return view('welcome',compact('services','ratings'));
    }
}
