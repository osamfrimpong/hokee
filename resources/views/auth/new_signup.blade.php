@extends('layouts.auth')

@section('contents')
<div class="header">
	<h1>Get Hooked</h1>
</div>
<div class="w3-main">
		<div class="form-w3l">

			<form action="#" method="post">
				<div class="w3l-user">
					<span><i class="fa fa-user-circle-o w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="name" placeholder="name" required=""/>
					<div class="clear"></div>
				</div>
				<div class="w3l-user">
					<span><i class="fa fa-child w3l-1" aria-hidden="true"></i></span>
					<input type="text" name="age" placeholder="age" required=""/>
					<div class="clear"></div>
				</div>
				<div class="w3l-user">
					<span><i class="fa fa-industry w3l-2" aria-hidden="true"></i></span>

					<select class="form-control"> 
							<option>Occupation</option>
							<option>Banker</option>

					</select>

				</div>
				
				<div class="w3l-password">
					<span><i class="fa fa-lock w3l-2" aria-hidden="true"></i></span>
					<input type="password" name="password" placeholder="password" required=""/>
					<div class="clear"></div>
				</div>
				<div class="w3l-password">
						<span><i class="fa fa-lock w3l-2" aria-hidden="true"></i></span>
						<input type="password" name="confirm_password" placeholder="Confirm password" required=""/>
						<div class="clear"></div>
					</div>
	

				<div class="w3l-password">
					<span><i class="fa fa-female" aria-hidden="true">
					</i></span> 
					<label for="male">Male</label>
					<input class="form-check-input w3l-2" type="radio" name="Male" value="Male" required=""/>
					<label for="female">Female</label>
					<input class="form-check-input w3l-2" type="radio" name="Male" value="Female" required=""/>
				</div>
				
				<div class="w3l-email">
					<span><i class="fa fa-envelope-o w3l-3" aria-hidden="true"></i></span>
					<input type="email" name="e-mail" placeholder="yourname@gmail.com" required=""/>
					<div class="clear"></div>
				</div>
				
				<div class="w3l-phone">	
					<span><i class="fa fa-mobile w3l-4" aria-hidden="true"></i></span>
					<input type="text" name="phone" placeholder="0200 00 00 00" required=""/>
					<div class="clear"></div>
				</div>

				<div class="w3l-user">	
						<select class="form-control"> 
								<option>Interested In?</option>
								<option></option>
	
						</select>
	
					</div>

				
				<div class="w3l-btn">
					<input type="submit" name="button" value="sign up"/>
				</div>
			</form>
		</div>
	</div>
	
@endsection