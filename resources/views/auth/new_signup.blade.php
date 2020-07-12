@extends('layouts.auth')

@section('contents')
<body>
		<h1 class="header-w3ls">
		   Sign Up and Get Hooked
		</h1>
		<div class="mid-cls">
		   <form action="#" method="post">
			  <div class="main">
				 <div class="icon-head-wthree">
					<div class="images-headder">
					   <div class="wrap-custom-file">
						  <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png" />
						  <label  for="image1">
						  <span><img src="images/t1.jpg" alt="" class="image-fluid"></span>
						  <span class="fas fa-camera-retro"></span>
						  </label>
					   </div>
					</div>
					<div class="personal-info">
					   <p>Gender</p>
					   <div class="form-check">
						  <input class="form-check-input" type="radio" name="select4" value="option1" checked="">
						  <label class="form-check-label">
						  Male
						  </label>
					   </div>
					   <div class="form-check">
						  <input class="form-check-input" type="radio" name="select4" value="option2" checked="">
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
					<input type="text" name="name" placeholder="Last Name" required="">
					<div class="clear"></div>
				 </div>
				 <div class="form-left-w3l">
					<input type="email" name="email" placeholder="Email" required="">
				 </div>
				 <div class="form-right-w3ls ">
					<input type="password" name="password" placeholder="Password" required="">
					<div class="clear"></div>
				 </div>
				 <div class="btnn">
					<button type="submit">Sign Up</button><br>
					<div class="clear"></div>
				 </div>
			  </div>
		   </form>
		</div>
		<div class="copy">
		   <p>&copy;2018 Solo profile Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
		</div>
		<!--js working-->
		<script src='js/jquery-2.2.3.min.js'></script>
		<!--//js working-->
		<script>
		   $('input[type="file"]').each(function(){
			 // Refs
			 var $file = $(this),
				 $label = $file.next('label'),
				 $labelText = $label.find('span'),
				 labelDefault = $labelText.text();
		   
			 // When a new file is selected
			 $file.on('change', function(event){
			   var fileName = $file.val().split( '\\' ).pop(),
				   tmppath = URL.createObjectURL(event.target.files[0]);
			   //Check successfully selection
			   if( fileName ){
				 $label
				   .addClass('file-ok')
				   .css('background-image', 'url(' + tmppath + ')');
				 $labelText.text(fileName);
			   }else{
				 $label.removeClass('file-ok');
				 $labelText.text(labelDefault);
			   }
			 });
		   
		   // End loop of file input elements
		   });
		</script>
	 </body>
	
@endsection