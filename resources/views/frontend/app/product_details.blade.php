@extends('frontend.app')

@section('content')
	<!-- product details -->
	<div class="product-details app-pages app-section">
		<div class="container">
			<div class="entry">
				<div class="row">
					<div id="choose1" class="col s12">
						<img src="content/img/product2.png" alt="">
					</div>
					<div id="choose2" class="col s12">
						<img src="content/img/product4.png" alt="">
					</div>
					<div id="choose3" class="col s12">
						<img src="content/img/product5.png" alt="">
					</div>
					<div class="col s12">
						<ul class="tabs">
							<li class="tab col s4">
								<a href="#choose1">
									<img src="content/img/product2.png" alt="">
								</a>
							</li>
							<li class="tab col s4">
								<a href="#choose2">
									<img src="content/img/product4.png" alt="">
								</a>
							</li>
							<li class="tab col s4">
								<a href="#choose3">
									<img src="content/img/product5.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="details">
				<h5>Fashion Modern Style</h5>
				<div class="rating">
                    <span class="active"><i class="fa fa-star"></i></span>
                    <span class="active"><i class="fa fa-star"></i></span>
                    <span class="active"><i class="fa fa-star"></i></span>
                    <span class="active"><i class="fa fa-star"></i></span>
                    <span class=""><i class="fa fa-star"></i></span>
                </div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non incidunt natus nostrum  Non incidunt natus nostrum</p>
				<div class="price"><h5>$120</h5></div>
				<button class="button">ADD TO CART</button>
			</div>
			<div class="desc-review">
				<div class="row">
					<div class="col s12">
						<ul class="tabs">
							<li class="tab col s6">
								<a href="#description"><h5>Description</h5></a>
							</li>
							<li class="tab col s6">
								<a href="#review"><h5>Review</h5></a>
							</li>
						</ul>
					</div>
					<div id="description" class="col s12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam expedita fuga veniam, repellendus! Cum minus, ea animi earum, atque fuga tempora mollitia et hic voluptas rerum placeat incidunt dolore!</p>
					</div>
					<div id="review" class="review col s12">
						<div class="comment">
							<div class="content">
								<img src="content/img/comment1.png" alt="">
								<div class="entry">
									<strong><a href="">John Doe</a></strong>
									<div class="rating">
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class=""><i class="fa fa-star"></i></span>
					                </div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
							<div class="content">
								<img src="content/img/comment2.png" alt="">
								<div class="entry">
									<strong><a href="">John Doe</a></strong>
									<div class="rating">
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class="active"><i class="fa fa-star"></i></span>
					                    <span class=""><i class="fa fa-star"></i></span>
					                    <span class=""><i class="fa fa-star"></i></span>
					                </div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
								</div>
							</div>
							<div class="post-review">
								<h6>Post Review</h6>
								<form action="#">
									<input type="text" placeholder="Name">
									<input type="email" placeholder="Email">
									<textarea cols="20" rows="10" placeholder="Comment"></textarea>
									<button class="button">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product details -->
	
	@endsection