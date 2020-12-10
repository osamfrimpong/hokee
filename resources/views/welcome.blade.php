@extends('layouts.home')
@section('contents')

<!-- banner -->
<div id="home" class="w3ls-banner">
<!-- banner-text -->
<div style="font-family: Bookman Old Style;" class="slider">
	<div class="callbacks_container">
		<ul class="rslides callbacks callbacks1" id="slider4">
			<li>
				<div class="w3layouts-banner-top">
					<div class="container">
						<div class="agileits-banner-info">
						<h4 style="font-style: Brush Script MT">Hookee</h4>
						<h3>Connecting people who  </h3>
								<p><strong>want to get intimate</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
							<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Sign Up</a>
								</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">

					<div class="container">
						<div class="agileits-banner-info">
						<h4>Hookee</h4>
							<h3 >Stressed and Want Sex?</h3>
								<p ><strong> Get Hooked Up</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Sign Up</a>
	</div>
						</div>	
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top2">

					<div class="container">
						<div class="agileits-banner-info">
						<h4>Hookee</h4>
							<h3>Want a room for vacation??</h3>
								<p><strong> Get hooked to our partners</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Sign Up</a>
	</div>
						</div>	
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top3">

					<div class="container">
						<div class="agileits-banner-info">
						<h4>Hookee</h4>
							<h3>Stressed and need a massage?</h3>
								<p><strong>In your home or office?</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Sign Up</a>
	</div>
						</div>	
					</div>
				</div>
			</li>

			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top4">

					<div class="container">
						<div class="agileits-banner-info">
						<h4  style="color: #ffff;">Hookee</h4>
							<h3>Want some sex enhancers</h3>
								<p><strong>We got you</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Sign Up</a>
	</div>
						</div>	
					</div>
				</div>
			</li>

			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top5">

					<div class="container">
						<div class="agileits-banner-info">
						<h4  style="">Hookee</h4>
							<h3>Does your family want to</h3>
								<p><strong>See your boyfriend/Girlfriend</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >Rent a Boyfriend/Girlfriend</a>
	</div>
						</div>	
					</div>
				</div>
			</li>

			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top6">

					<div class="container">
						<div class="agileits-banner-info">
						<h4  style="">Hookee</h4>
							<h3>Want a relationship?</h3>
								<p><strong>Get Hooked Up</strong></p><br>
							<div class="agileits_w3layouts_more menu__item">
		<a href="{{route('register')}}" class="menu__link" data-toggle="modal" >SIGN UP NOW</a>
	</div>
						</div>	
					</div>
				</div>
			</li>


			
		</ul>
	</div>
	<div class="clearfix"> </div>
	<!--banner Slider starts Here-->
</div>
	<div class="thim-click-to-bottom">
		<a href="#about" class="scroll">
			<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
		</a>
	</div>
</div>	
<!-- //banner --> 
<!--//Header-->

<!-- banner-bottom -->
<div class="banner-bottom">
<div class="container">	
	<div class="agileits_banner_bottom">
		<h3><span>Get Hooked Up to a male or female , enjoy fantastic services</span> </h3>
	</div>
	<div class="w3ls_banner_bottom_grids">
		<ul class="cbp-ig-grid">
			@forelse ($services as $service)
				<li>
				<div class="w3_grid_effect">

					<span><i class="fas {{$service->picture}} fa-3x"></i></span><br>
				<h3 class="cbp-ig-title">{{$service->title}}</h3><br> 
				<p style="font-size: 150%; font-famiy: ; color: #d34836;"> <strong>${{$service->price}}</strong></p>
				<button class="btn btn-small btn-info" onclick="location.href='{{route('user.service.requests',$service->id)}}';" >Book Now</button>

				</div>
			</li>
			@empty
				
			@endforelse
		
			
								
		</ul>
	</div>
</div>
</div>
<!-- //banner-bottom -->
<!-- /about -->
<div class="about-wthree" id="about">
  <div class="container">
		   <div class="ab-w3l-spa">
					<h3 class="title-w3-agileits title-black-wthree">About Hookee GH</h3> 
				   <p style="font-family: georgia; font-size: 15px;" class="about-para-w3ls"> Hookee is a Ghanaian based online connect and hookup service provider.
					Hookee also advertises hotels, rooms for rent, sex enhancing device at reasonable fees and excites its users with a blog on sexuality.
					</p>
				   <a style="color: #ffffff; font-size: 15px;" href="{{route('about')}}" class="btn btn-info" data-toggle="modal" >READ MORE</a>
				  
				<hr><br>
				   <img src="images/about1.jpg" class="img-responsive" alt="">
								{{-- <div class="w3l-slider-img">
									<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
								</div> --}}
							   <div class="w3ls-info-about">
									<h4> Hook up with Mature Adult Male & Females</h4>
									<p>Feel some sexual intimacy today</p>
								</div>
		  </div>
	   <div class="clearfix"> </div>
</div>
</div>
<!-- //about -->
<!--sevices-->
<div class="advantages">
<div class="container">
<div class="advantages-main">
		<h3 class="title-w3-agileits">Why Choose Us</h3>
   <div class="advantage-bottom">
	 
	 <div class="col-md-12 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
		 <div class="advantage-block">
			<i class="fa fa-clock-o" aria-hidden="true"></i>
			 <h4>We are the best</h4>
			<p><i class="fa fa-check" aria-hidden="true"></i> Pay Less, Get Hooked Up.</p>
			<p><i class="fa fa-check" aria-hidden="true"></i> 24 Hours Service</p>
			<p><i class="fa fa-check" aria-hidden="true"></i> High Level of Confidentiality & Privacy</p>
			<p><i class="fa fa-check" aria-hidden="true"></i> Your Needs & Satisfaction Our Priority</p>

		 </div>
	 </div>
	<div class="clearfix"> </div>
	</div>
</div>
</div>
</div>

<hr>
<section class="portfolio-w3ls" id="gallery">
 <h3 class="title-w3-agileits title-black-wthree">Our Blog Posts</h3>

	
	
		<div class="clearfix"> </div>
</section>
<!-- //gallery -->




<!-- visitors -->
<div class="w3l-visitors-agile" >
<div class="container">
		 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
</div>
<div class="w3layouts_work_grids">
	<section class="slider">
		<div class="flexslider">
			<ul class="slides">
				@forelse ($ratings as $rating)
				<li>
					<div class="w3layouts_work_grid_left">
					<img src="{{asset('images/5.jpg')}}" alt=" " class="img-responsive" />
						<div class="w3layouts_work_grid_left_pos">
						<img src="{{asset(Storage::url($rating->user->profile_picture))}}" alt=" " class="img-responsive" />
						</div>
					</div>
					<div class="w3layouts_work_grid_right">
						{{-- <h4>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						Worth to come again
						</h4> --}}
						<p>{{$rating->message}} </p>
						<h5>{{$rating->user->name}}</h5>
						<p>{{$rating->user->occupation}}</p>
					</div>
					<div class="clearfix"> </div>
				</li>
				@empty
					
				@endforelse
				
				
			
			</ul>
		</div>
	</section>
</div>	
</div>
<!-- visitors -->
<!-- /contact -->
@endsection
