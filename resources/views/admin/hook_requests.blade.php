@extends('layouts.admin')


@section('contents')

<section class="wrapper">
    <div class="table-agile-info">
<div class="panel panel-default">
<div class="panel-heading">
  <p><strong> Hookee Requests Made</strong></p>
</div>
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
        <th>Picture</th>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Location</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
        <td><img src="#" alt="user profile" width="35px" height="35px"></td>
        <td>francis amoah</td>
        <td>28</td>
        <td>Male</td>
        <td>Sogakope</td>
        <td>0244077952</td>

        <td></td>
        {{-- <td>Jul 1, 2013</td> --}}
        <td>
            <!-- View Request -->
            <a href="{{route('admin.viewrequest.index')}}"><button  type="button" class="btn btn-sm btn-primary">
              View
            </button></a>
          
        </td>
      </tr>
          <tr><td colspan="6">No Users Added</td></tr>

      
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