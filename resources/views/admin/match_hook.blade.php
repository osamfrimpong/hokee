@extends('layouts.admin')


@section('contents')

<section class="wrapper">
    <div class="table-agile-info">
<div class="panel panel-default">
<div class="panel-heading">
  Mactch Available Hookees
</div>
<div class="row w3-res-tb">
  <div class="col-sm-5 m-b-xs">
    <select class="input-sm form-control w-sm inline v-middle">
      <option value="0">Bulk action</option>
    </select>
    <button class="btn btn-sm btn-default">Apply</button>                
  </div>
  <div class="col-sm-4">
  </div>
  <div class="col-sm-3">
    <div class="input-group">
      <input type="text" class="input-sm form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-sm btn-default" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-striped b-t b-light">
    <thead>
      <tr>
        <th style="width:20px;">
          <label class="i-checks m-b-none">
            <input type="checkbox"><i></i>
          </label>
        </th>
        <th>Picture</th>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Occupation</th>
        <th>Telephone</th>
        {{-- <th>Location</th> --}}
      </tr>
    </thead>
    <tbody>
        @forelse ($bookings as $booking)
        <tr>
          <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
          <td><img src="{{asset(Storage::url($booking->user->profile_picture))}}" alt="user profile" width="35px" height="35px"></td>
          <td>{{$booking->user->name}}</td>
          <td>{{$booking->user->age}}</td>
          <td>{{$booking->user->sex}}</td>
          <td>{{$booking->user->occupation}}</td>
          <td>{{$booking->user->phone}}</td>
  
          <td></td>
          {{-- <td>Jul 1, 2013</td> --}}
          <td>
              <!-- View Request -->
          <form method="POST" action="{{route('admin.requests.matchhook')}}">
            @csrf
          <input type="hidden" name="request_id" value="{{$request->request_id}}">
          <input type="hidden" name="booking_id" value="{{$booking->booking_id}}">
             <button  type="submit" class="btn btn-sm btn-primary">
                Match
              </button>
            
          </td>
        </tr> 
        @empty
        <tr><td colspan="6">No Bookings Found</td></tr>
        @endforelse

      
    </tbody>
  </table>
</div>
<footer class="panel-footer">
  <div class="row">
    
    <div class="col-sm-5 text-center">
      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
    </div>
    <div class="col-sm-7 text-right text-center-xs">                
      <ul class="pagination pagination-sm m-t-none m-b-none">
        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>

        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
</div>
</div>
</section>




@endsection