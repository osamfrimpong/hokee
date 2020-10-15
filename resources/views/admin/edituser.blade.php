@extends('layouts.admin')

@section('contents')
<section class="wrapper">
	<div class="form-w3layouts">

<form action="{{route('admin.users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    <div class="form-group">
      <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email"  value="{{$user->email}}" name="email" required>
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" required>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" value="{{$user->age}}" name="age" required>
    </div>
    <div class="form-group">
      <label for="occupation">Occupation</label>
      <select name="occupation" class="form-control" required>
        @foreach ($occupations as $occupation)
        <option value="{{$occupation->name}}" {{$user->occupation == $occupation->name ? 'selected' : ''}}>{{$occupation->name}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-default">Save Changes</button>
  </form> 
</div>
</section>
@endsection