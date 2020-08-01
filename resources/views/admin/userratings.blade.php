@extends('layouts.admin')

@section('contents')


<section class="wrapper">
    <div class="table-agile-info">
<div class="panel panel-default">
<div class="panel-heading">
  Users Ratings<br>
</div>
<p class="text-center">You can either approve or disapprove User Ratings Here</p>

<div class="row w3-res-tb">
  <div class="col-sm-5 m-b-xs">
    <select class="input-sm form-control w-sm inline v-middle">
      <option value="0">Bulk action</option>
      <option value="1">Delete selected</option>
      <option value="2">Bulk edit</option>
      <option value="3">Export</option>
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
        <th>Name</th>
        <th>Message</th>
        <th>Date</th>
        <th></th>

        {{-- <th>Location</th> --}}
      </tr>
    </thead>
    <tbody>

   @forelse ($userRatings as $rating)
   <tr>
    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
    <td>{{$rating->user->name}}</td>
    <td>{{$rating->message}}</td>
    <td>{{$rating->created_at}}</td>
    <td>
    <form action="{{route('admin.userratings.update',$rating->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="action_type" value="{{$rating->approved == false ? 1 : 0}}">
    <button class="btn btn-info" type="submit">{{$rating->approved == false ? "Approve" : "Disapprove"}}</button>
    </form>
     </td>
    <td>
      <form action="{{route('admin.userratings.destroy',$rating->id)}}" method="post">
        @method('DELETE')
        @csrf
      
        <button class="btn btn-danger" type="submit"><i class="fa  fa-times"></i></button>
        </form>
    </td>    
  </tr>
   @empty
   <tr><td colspan="6">No Ratings Submitted</td></tr> 
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