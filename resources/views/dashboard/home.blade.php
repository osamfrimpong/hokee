@extends('layouts.dashboard')

@section('contents')

	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-lg-2 market-update-gd">
				<div class="market-update-block clr-block-2">
					
					 <div class="col-lg-3 market-update-left">
					 <h4>Requests Made</h4>
					<h3>5</h3>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-lg-2 market-update-gd">
				<div class="market-update-block clr-block-2">
					
					 <div class="col-lg-3 market-update-left">
					 <h4>Matches Done</h4>
					<h3>5</h3>
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
		<th data-breakpoints="xs">ID</th>
		<th>Picture</th>
		<th>Name</th>
		<th>Sex</th>

		<th data-breakpoints="xs">Location</th>
	   
		<th data-breakpoints="xs sm md" data-title="DOB">Details</th>
	  </tr>
	</thead>
	<tbody>
	
	  <tr>
		<td>1</td>
		<td><img src"#" width="10px" height="10px"></td>
		<td>Francis</td>
		<td>Male</td>
		<td>Adenta, Accra</td>
		<td><button class="btn btn-info btn-medium">View</button></td>
	  </tr>
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