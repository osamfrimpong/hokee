<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Payment;
use App\Models\Occupation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    
    public function index()
    {
        $title = "UserProfile";
        $user = Auth::user();
        $occupations = Occupation::all();
        return view('dashboard.userprofile',compact('title','user','occupations'));
    }

    public function update(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $data = $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'occupation' => 'required|string',
            'phone' => 'required|string'
        ]);

        

        if($request->has('old_password') || $request->has('new_password') || $request->has('new_password_confirm')){

            $request->validate(['new_password' => 'required|string|min:8|confirmed']);
            $request->validate(['old_password' => 'required|string|min:8']);

           if(Hash::check($request->old_password,$user->password))
           {
            $data['password'] = Hash::make($request->new_password);
           }
           
        }

        if($request->hasFile('profile_image')){
           $request->validate(['profile_image' => 'required|image']);
           $data['profile_picture'] =  $request->file('profile_image')->store('public/profiles');
           $this->deleteImage($user->profile_picture);
        }

       
        $user->update($data);

    }

    public function upgradeAccount(){
        $bill_id = Str::uuid();
        Payment::create(['amount'=>10,'user_id'=>Auth::user()->id,'bill_id'=>$bill_id,'payment_type'=>2,'payment_method'=>'rave']);
        session(['amount'=>10,'bill_id'=>$bill_id]);
        return redirect()->route('user.upgradecheckout');
    }

    public function checkout(){
        $title = "Checkout";
        $amount = session('amount');
        $bill_id = session('bill_id');
        $user = Auth::user();
       return view('dashboard.upgradecheckout',compact('title','amount','bill_id','user'));
    }

   public function deleteImage($imageUrl){
    Storage::disk('local')->delete($imageUrl);
   }
    
}
