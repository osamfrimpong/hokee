@extends('layouts.auth')

@section('contents')
<div class="header">
	<h1>Log In Here</h1>
</div>
<div class="w3-main">
		<div class="form-w3l">

			<form action="#" method="post">

				
				<div class="w3l-email">
					<span><i class="fa fa-envelope-o w3l-3" aria-hidden="true"></i></span>
					<input type="email" name="e-mail" placeholder="info@example.com" required=""/>
					<div class="clear"></div>
				</div>
				<div class="w3l-password">
					<span><i class="fa fa-lock w3l-2" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="password" required=""/>
					<div class="clear"></div>
				</div>

				
				<div class="w3l-btn">
					<input type="submit" name="button" value="Log in"/>
				</div>

				<div class="w3l-btn">
					<a href="#" class="btn btn-large btn-danger"><strong>New User? <br> <hr>Sign Up Here</strong></a>
				</div>
			</form>
		</div>
	</div>
	
@endsection