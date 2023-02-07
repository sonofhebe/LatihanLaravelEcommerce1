@extends('layouts.header')

@section('content')
	<!-- contact-->
	<div class="contact app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Contact Us</h3>
			</div>
			<form action="#">
				<input type="text" placeholder="Name">
				<input type="email" placeholder="Email">
				<input type="number" placeholder="Telepon">
				<input type="text" placeholder="Website">
				<textarea cols="20" rows="10" placeholder="Your Message"></textarea>
				<button class="button">Submit</button>
			</form>
		</div>
	</div>
	<!-- end contact -->

	@endsection