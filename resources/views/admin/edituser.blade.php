@extends('layouts.admin')

@section('contents')
<section class="wrapper">
	<div class="form-w3layouts">

<form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age">
    </div>
    <div class="form-group">
      <label for="occupation">Occupation</label>
      <input type="text" class="form-control" id="occupation">
    </div>

    <button type="submit" class="btn btn-default">Save Changes</button>
  </form> 
</div>
</section>
@endsection