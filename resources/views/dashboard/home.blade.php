@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
		<button class="btn-info btn-small">Hello {{$user->name}}</button>

			<!-- //market-->
		<div class="market-updates">
			<div class="col-lg-6 market-update-gd">
				<div class="market-update-block clr-block-2">
					
					 <div class="col-lg-3 market-update-left">
					 <h4>Requests Made</h4>
					<h3>{{$totalRequests}}</h3>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-lg-6 market-update-gd">
				<div class="market-update-block clr-block-2">
					
					 <div class="col-lg-3 market-update-left">
					 <h4>Matches Done</h4>
					<h3>{{$matchedRequests}}</h3>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		
		   <div class="clearfix"> </div>
		</div>	
		<section class="panel">
			<div class="panel-body">
				<button class="btn btn-info btn-large btn-compose">
				<a href="mail_compose.html">
					<strong>UPGRADE TO VIP</strong>
				</a>
				</button>
			</div>
		</section>
				
		

	<div class="table-agile-info">
<div class="panel panel-default">
<div class="panel-heading">
Recent Hookups
</div>
<div>
  <table class="table" ui-jq="footable" ui-options='{
	"paging": {
	  "enabled": true
	},
	"filtering": {
	  "enabled": true
	},
	"sorting": {
	  "enabled": true
	}}'>
	<thead>
	  <tr>
		<th>Picture</th>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        {{-- <th>Location</th> --}}
		<th>Phone</th>
		<th>Actions</th>
	  </tr>
	</thead>
	<tbody>
		@forelse ($matchedHooks as $matchedHook)
		<tr>
		  
		  <td><img src="{{asset(Storage::url($matchedHook->hooker == $user->id ? $matchedHook->booker->profile_picture : $matchedHook->owner->profile_picture))}}" alt="user profile" width="35px" height="35px"></td>
		  <td>{{$matchedHook->hooker == $user->id ? $matchedHook->booker->name : $matchedHook->owner->name}}</td>
		  <td>{{$matchedHook->hooker == $user->id ? $matchedHook->booker->age : $matchedHook->owner->age}}</td>
		  <td>{{$matchedHook->hooker == $user->id ? $matchedHook->booker->sex : $matchedHook->owner->sex}}</td>
		  {{-- <td>{{$matchedHook->location}}</td> --}}
		  <td>{{$matchedHook->hooker == $user->id ? $matchedHook->booker->phone : $matchedHook->owner->phone}}
		  <td>
			  <!-- View Request -->
			  
			  <a href="{{route('user.viewrequest',$matchedHook->request_id)}}"><button  type="button" class="btn btn-sm btn-primary">
				View Details
			  </button></a>
			
			  
			
		  </td>
		</tr> 
		@empty
		<tr><td colspan="6">No Hookups</td></tr>
		@endforelse

	</tbody>
  </table>
</div>
</div>

</div>

</section>

<div class="table-agile-info">
	<p>Need help? We're always here for you.</p><br>
		<button class="btn btn-danger btn-large"><a style="color: white" href="#"  >
			Chat with a Live Person</a>
		</button>
		
	</div>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			</div>
		  </div>
  <!-- / footer -->
@endsection