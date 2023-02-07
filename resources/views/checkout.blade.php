@extends('layouts.header')

@section('content')
	<!-- checkout -->
	<div class="checkout app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Checkout</h3>
			</div>
			<div class="entry">
				<div class="billing-details">
					<h5>Billing Details</h5>
					<form action="#">
						<input type="text" placeholder="Full Name">
						<input type="text" placeholder="Nick Name">
						<input type="email" placeholder="Email">
						<input type="number" placeholder="Phone">
						<input type="text" placeholder="Address">
						<input type="text" placeholder="Town/City">
						<input type="text" placeholder="Country">
						<textarea cols="30" rows="10" placeholder="Notes for seller"></textarea>
					</form>
				</div>
				<div class="payment-method">
					<h5>Payment Method</h5>
					<div class="bt">
						<input type="radio" name="group1" id="r1">
						<label for="r1">
							<h6>Bank Transfer</h6>
						</label>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="cod">
						<input type="radio" name="group1" id="r2">
						<label for="r2">
							<h6>Cash on Delivery</h6>
						</label>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="paypal">
						<input type="radio" name="group1" id="r3">
						<label for="r3">
							<h6>Paypal</h6>
						</label>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
				<div class="order">
					<h5>Your Order</h5>
					<div class="row">
						<div class="col s8">
							<h6>Fashion Style</h6>
						</div>
						<div class="col s4 text-right">
							<h6>$140.00</h6>
						</div>
						<div class="col s8">
							<h6>Tshirt Modern</h6>
						</div>
						<div class="col s4 text-right">
							<h6>$166.00</h6>
						</div>
						<div class="col s8">
							<h6>Flat Shipping Rate</h6>
						</div>
						<div class="col s4 text-right">
							<h6>$6.00</h6>
						</div>
						<div class="col s8">
							<h5><span>Total</span></h5>
						</div>
						<div class="col s4 text-right">
							<h5><span>$306</span></h5>
						</div>
						<button class="button">Process to Checkout</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end checkout -->

	@endsection