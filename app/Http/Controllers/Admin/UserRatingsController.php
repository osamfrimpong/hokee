<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserRating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'User Ratings';
        $userRatings = UserRating::orderBy('created_at','desc')->get();
        return view('admin.userratings',compact('title','userRatings'));
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
        //
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
     * @param  UserRating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rating = UserRating::findOrFail($id);
        // $rating->approved = $request->action_type;
        $rating->update(['approved'=>$request->action_type]);
        return redirect()->route('admin.userratings.index');
        // print_r($rating);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rating = UserRating::findOrFail($id);
        $rating->delete();
        return redirect()->route('admin.userratings.index');
    }
}
