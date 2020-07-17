<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Models\HookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $requests = HookRequest::all();
        $vipcount = User::where('paid',1)->get()->count();
        $regularcount = User::where('paid',0)->get()->count();
        return view('admin.home',compact('title','requests','regularcount','vipcount'));
    }
}
