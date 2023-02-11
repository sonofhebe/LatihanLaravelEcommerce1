@extends('frontend.app')

@section('content')
	<!-- register-->
	<div class="register app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Register</h3>
			</div>
			<form action="#">
				<input type="text" placeholder="First Name">
				<input type="text" placeholder="Last Name">
				<input type="text" placeholder="Username">
				<input type="email" placeholder="Email">
				<input type="password" placeholder="password">
				<button class="button">Register</button>
				<strong class="login-now">Your already registered? <a href="">Login now</a></strong>
			</form>
			<div class="or">
				<h5>OR</h5>
				<button class="button facebook">Register with Facebook</button>
				<button class="button twitter">Register with Twitter</button>
				<button class="button google">Register with Google+</button>
			</div>
		</div>
	</div>
	<!-- end register -->
	
	@endsection