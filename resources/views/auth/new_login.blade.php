@extends('layouts.auth')

@section('contents')
<div class="header">
	<h1>user profile form</h1>
</div>
<div class="w3-main">
		<div class="form-w3l">
			<div class="img">
				<img src="images/profile.jpg" alt="image">
				<h2>signup here</h2>
			</div>	
			<form action="#" method="post">
				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="username" placeholder="username" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-password">
					<span><i class="fa fa-lock w3l-2" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="password" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-email">
					<span><i class="fa fa-envelope-o w3l-3" aria-hidden="true"></i></span>
					<input type="email" name="e-mail" placeholder="info@example.com" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-phone">	
					<span><i class="fa fa-mobile w3l-4" aria-hidden="true"></i></span>
					<input type="text" name="phone" placeholder="+001" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-btn">
					<input type="submit" name="button" value="sign up"/>
				</div>
			</form>
		</div>
	</div>
	
@endsection