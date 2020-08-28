
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="{{asset('checkout/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('checkout/js/jquery.min.js')}}"></script>
</head>
<body>
	<div class="main">
		<h1>Checkout</h1>
		<div class="content">
			
			<script src="{{asset('checkout/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div>
										<div class="payment-info">
											<h3>PAYMENT SUMMARY</h3>
											<form method="POST" action="{{ route('pay') }}" id="paymentForm">
												{{ csrf_field() }}
@php
$array = array('metaname' => 'size', 'metavalue' => 'big');
@endphp
	<input type="hidden" name="amount" value="{{$amount}}" /> 
    <input type="hidden" name="payment_method" value="both" /> 
	<input type="hidden" name="description" value="Book Hook Request" /> 
    <input type="hidden" name="country" value="GH" /> 
    <input type="hidden" name="currency" value="GHS" /> 
	<input type="hidden" name="email" value="{{$user->email}}" /> 
    <input type="hidden" name="firstname" value="{{$user->name}}" /> 
    <input type="hidden" name="lastname" value="{{$user->name}}" />
    <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > 
	<input type="hidden" name="phonenumber" value="{{$user->phone}}" /> 
	<input type="hidden" name="ref" value="{{$booking_id}}">

												<div class="tab-for">				
													<h5>AMOUNT</h5>
														GHS {{$amount}}
													<h5>SERVICE</h5>
													Booking Hook Request						<br>
														
													<input type="submit" value="PROCEED" />
												</div>			
											</form>
											
											{{-- <div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div> --}}
										</div>
									</div>




									
								</div>	
							</div>
						</div>	

		</div>
		{{-- <p class="footer">Laravel <a href="https://laravel.co/" target="_blank">w3layouts</a></p> --}}
	</div>
</body>
</html>