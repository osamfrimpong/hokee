@extends('layouts.auth')

@section('contents')
<body>
		<h1 class="header-w3ls">
		   Sign Up and Get Hooked
		</h1>
		<div class="mid-cls">
			<form method="POST" action="{{ route('register') }}">
				@csrf
			  <div class="main">
				 <div class="icon-head-wthree">
					<div class="images-headder">
					   <div class="wrap-custom-file">
						  <input type="file" name="profile" id="image1" accept=".gif, .jpg, .png" required/>
						  <label  for="image1">
						  <span><img src="images/t1.jpg" alt="" class="image-fluid"></span>
						  <span class="fas fa-camera-retro"></span>
						  </label>
					   </div>
					</div>
					<div class="personal-info">
					   <p>Gender</p>
					   <div class="form-check">
						  <input class="form-check-input" type="radio" name="sex" value="option1" required>
						  <label class="form-check-label">
						  Male
						  </label>
					   </div>
					   <div class="form-check">
						  <input class="form-check-input" type="radio" name="sex" value="option2" required>
						  <label class="form-check-label">
						  Female
						  </label>
					   </div>
					</div>
				 </div>
				 <div class="form-left-to-w3l">
					<input type="text" name="name" placeholder="Name" required="">
					<div class="clear"></div>
				 </div>
				 <div class="form-left-to-w3l">
					<input type="text" name="age" placeholder="age" required="">
					<div class="clear"></div>
				 </div>
				 <div class="form-group form-left-w3l ">
						<label class="form-check-label" for="sel1">Occupation</label>
						<select class="form-control" id="sel1" name="occupation" required>
						  <option value="banker">Banker</option>
						  <option value="doctor">Doctor</option>

						</select>
					  </div> 
				 <div class="form-left-to-w3l">
						<input type="tel" name="phone" placeholder="Phone Number" required="">
						<div class="clear"></div>
					 </div>
				 <div class="form-left-w3l">
					<input type="email" name="email" placeholder="Email" required="">
				 </div>
				 <div class="form-group form-left-w3l ">
						<label class="form-check-label" for="sel1">Interested In?</label>
						<select class="form-control" id="sel1" name="interested_in" required>
						  <option value="males">Males</option>
						  <option value="females">Females</option>
						  <option value="both">Both</option>

						</select>
					  </div> 

				 <div class="form-right-w3ls ">
					<input type="password" name="password" placeholder="Password" required="">
					<div class="clear"></div>
				 </div>
				 <div class="form-right-w3ls ">
						<input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
						<div class="clear"></div>
					 </div>
				 <div class="btnn">
					<button type="submit">Sign Up</button><br>
					<div class="clear"></div>
				 </div>
			  </div>
		   </form>
		</div>
	
	 </body>
	
@endsection