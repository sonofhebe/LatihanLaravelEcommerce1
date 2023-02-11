@extends('frontend.app')

@section('content')
	<!-- product cart -->
	<div class="product-cart app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Shopping Cart</h3>
			</div>
			<div class="entry">
				<div class="cart-title">
					<div class="row">
						<div class="col s4">
							<img src="content/img/product2.png" alt="">
						</div>
						<div class="col s7">
							<h6>Fashion Style Modern</h6>
						</div>
						<div class="col s1">
							<a href=""><i class="fa fa-remove"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Quantity</h6>
						</div>
						<div class="col s8">
							<input type="number" value="1">
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
							<h6>Quantity</h6>
						</div>
						<div class="col s8">
							<input type="number" value="1">
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
				</div>
			</div>
			<div class="cart-total">
				<div class="row">
					<div class="col s8">
						<h6>Fashion Style Modern</h6>
					</div>
					<div class="col s4">
						<h6>$18.00</h6>
					</div>
					<div class="col s8">
						<h6>Fashion for Women's</h6>
					</div>
					<div class="col s4">
						<h6>$18.00</h6>
					</div>
					<div class="col s8">
						<h5>Total</h5>
					</div>
					<div class="col s4">
						<h5>$36.00</h5>
					</div>
					<button class="button">Process to Checkout</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end product cart -->
	
	@endsection