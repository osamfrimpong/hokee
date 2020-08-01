<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){
        $title = "Home";
        return view('dashboard.home',compact('title'));
    }

    public function checkout(){
        $title = "Checkout";
        return view('dashboard.checkout',compact('title'));
    }

    public function userprofile(){
        $title = "UserProfile";
        return view('dashboard.userprofile',compact('title'));
    }
    public function ratings(){
        $title = "Ratings";
        return view('dashboard.ratings',compact('title'));
    }
}
