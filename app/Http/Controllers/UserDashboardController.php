<?php

namespace App\Http\Controllers;

use App\Models\UserRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        return view('dashboard.userprofile',compact('title','user'));
    }
    public function ratings(){
        $title = "Ratings";
        $user = Auth::user();
        return view('dashboard.ratings',compact('title','user'));
    }

    public function rate(Request $request){
        $request->validate([
            'message' => 'required|string:255'
        ]);

        UserRating::create(['message'=>$request->message,'user_id'=>Auth::user()->id]);

        return redirect()->route('user.ratings');
    }
}
