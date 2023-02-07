@extends('layouts.header')

@section('content')
	<!-- wishlist -->
	<div class="wishlist app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Wishlist</h3>
			</div>
			<div class="entry">
				<div class="wishlist-title">
					<div class="row">
						<div class="col s4">
							<img src="content/img/product2.png" alt="">
						</div>
						<div class="col s7">
							<h6>Fashion Modern Style</h6>
						</div>
						<div class="col s1">
							<a href=""><i class="fa fa-remove"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Stock</h6>
						</div>
						<div class="col s8">
							<h6>In Stock</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Price</h6>
						</div>
						<div class="col s8">
							<h6>$18</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<button class="button">MOVE TO CART</button>
						</div>
					</div>
				</div>
				<div class="cart-title s-title">
					<div class="row">
						<div class="col s4">
							<img src="content/img/product5.png" alt="">
						</div>
						<div class="col s7">
							<h6>Fashion for Women's</h6>
						</div>
						<div class="col s1">
							<a href=""><i class="fa fa-remove"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Stock</h6>
						</div>
						<div class="col s8">
							<h6>In Stock</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Price</h6>
						</div>
						<div class="col s8">
							<h6>$18</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<button class="button">MOVE TO CART</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wishlist -->
	
	@endsection