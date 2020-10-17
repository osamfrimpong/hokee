<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Services";
        return view('admin.services',compact('title'));
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
        $request->validate([
            'title' => 'required|unique:services',
            'price' => 'required|numeric',
            'picture' => 'required',
        ]);
        // $file = $request->file('picture')->store('public/services');
        Service::firstOrCreate(['title'=>$request->title,'price'=> $request->price],['picture'=>$request->picture]);
        return redirect()->route('admin.services.index');
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
    public function edit(Service $service)
    {
        $title = "Services";
        return view('admin.edit_service',compact('title','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
       $data = $request->all();       

        // $data['uuid'] = Str::uuid();
        // if($request->hasFile('picture'))
        // {
        // Storage::disk('local')->delete($service->picture);
        // $data['picture'] = $request->file('picture')->store('public/services');}
        // else{
        //     $data['picture'] = $service->picture;
        // }
        $service->fill($data)->save();
        return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        // Storage::disk('local')->delete($service->picture);
        $service->delete();
        return redirect()->route('admin.home');
        
    }
}
