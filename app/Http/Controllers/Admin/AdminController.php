<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Models\Payment;
use App\Models\Service;
use App\Models\HookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $services = Service::orderBy('title','asc')->get();
        $requests = HookRequest::all();
        $sales = Payment::select('status',DB::raw('sum(amount) as total_sales'))->where('status',1)->groupBy('status')->get()->first;
       
        $vipcount = User::where('paid',1)->get()->count();
        $regularcount = User::where('paid',0)->get()->count();
        return view('admin.home',compact('title','requests','regularcount','vipcount','services','sales'));
    }

   
}
