@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
<div class="row">
    <section class="panel">
        <header class="panel-heading">
            <p><strong> Fill in the details to request a hookee</strong></p>
        </header>
        <div class="panel-body">
        <form class="form-horizontal bucket-form" method="POST" action="{{route('user.addrequest')}}">
             @csrf
             <input type="hidden" name="interested_in" value="{{$user->interested_in}}">
                <div  class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="{{$user->name}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="{{$user->age}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sex</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="{{$user->sex}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Occupation</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="{{$user->occupation}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Telephone Number</label>
                    <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" type="text" value="{{$user->phone}}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Location</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="sel1" name="location" required>
                            @foreach ($locations as $location)
                        <option value="{{$location->name}}">{{$location->name}}</option>
                            @endforeach
  
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Interested In?</label>
                    <div class="col-sm-6">

                        <select class="form-control" id="sel1" name="service_id" required>
                            @foreach ($services as $service)
                        <option value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
  
                          </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Your Lovely Message</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>     
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-6 offset 3">
                        <button class="btn btn-lg btn-info" type="submit">Request</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
	</section>

@endsection
