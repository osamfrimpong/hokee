<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\HookRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['booking_id'] = Str::uuid();
        $data['user_id'] = Auth::user()->id;
        Booking::create($data);
        Payment::create(['amount'=>10,'user_id'=>Auth::user()->id,'bill_id'=>$data['booking_id'],'payment_type'=>1,'payment_method'=>'rave']);
        session(['amount'=>10,'booking_id'=>$data['booking_id']]);
        return redirect()->route('bookingcheckout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bookRequest($request_id){
        $hookRequest = HookRequest::where('request_id',$request_id)->get()->first();
        return view('dashboard.bookrequest',compact('hookRequest'));

    }

    public function checkout(){
        $title = "Checkout";
        $amount = session('amount');
        $booking_id = session('booking_id');
        $user = Auth::user();
       return view('dashboard.bookcheckout',compact('title','amount','booking_id','user'));
    }

    // public function addrequest(Request $request){
    //     $request->validate([
    //         'message' => 'required|string:255',
    //         'location' => 'required|string:255'
    //     ]);
    //     $data = $request->all();
    //     $data['hookee'] = Auth::user()->id;
    //     $data['request_id'] = Str::uuid();

    //     $service = Service::findOrFail($request->service_id);

    //     // DB::transaction(function(){
    //     HookRequest::create($data);
    //     Payment::create(['amount'=>$service->price,'user_id'=>Auth::user()->id,'bill_id'=>$data['request_id'],'payment_type'=>0,'payment_method'=>'rave']);
    //     // });
        

    //     session(['service'=>$service,'request_id'=>$data['request_id']]);

    //     return redirect()->route('user.checkout');
    // }
}
