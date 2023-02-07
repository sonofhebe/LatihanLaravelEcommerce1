<!-- https://rabonadev.com/market/index.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Market - eCommerce Mobile Template Shop and Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="shortcut icon" href="{{ asset('content/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('content/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('content/css/style.css') }}">
    
</head>

<body class="home">
    <div class="navbar">
        <div class="container">
            <div class="panel-control-left">
                <a href="#" data-activates="slide-out-left" class="sidenav-control-left"><i class="fa fa-bars"></i></a>
            </div>
            <div class="site-title"><a href="{{url('/')}}" class="logo">
                    <h1>MARKETs</h1>
                </a></div>
            <div class="panel-control-right"><a href="#" data-activates="slide-out-right"
                    class="sidenav-control-right"><i class="fa fa-shopping-bag">
                    </i><span>2</span></a></div>
        </div>
    </div>
    <div class="panel-control-left">
        <ul id="slide-out-left" class="side-nav collapsible" data-collapsible="accordion">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
            <li>
                <div class="collapsible-header"><i class="fa fa-indent">
                    </i>Categories <span><i class="fa fa-chevron-right"></i></span></div>
                <div class="collapsible-body">
                    <ul class="categories-in collapsible" data-collapsible="accordion">
                        <li><a href="{{url('categories')}}">Categories Page</a></li>
                        <li>
                            <div class="collapsible-header">Mobile & Tablet <span>
                                    <i class="fa fa-chevron-right"></i></span></div>
                            <div class="collapsible-body">
                                <ul class="side-nav-panel">
                                    <li><a href="#">Smartphone</a></li>
                                    <li><a href="#">Tablet</a></li>
                                    <li><a href="#">Charger</a></li>
                                    <li><a href="#">Powerbank</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">Laptop & Computer <span><i
                                        class="fa fa-chevron-right"></i></span></div>
                            <div class="collapsible-body">
                                <ul class="side-nav-panel">
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">PC Gaming</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">Fashion <span><i class="fa fa-chevron-right"></i></span>
                            </div>
                            <div class="collapsible-body">
                                <ul class="side-nav-panel">
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header">Sport <span><i class="fa fa-chevron-right"></i></span></div>
                            <div class="collapsible-body"><ul class="side-nav-panel">
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Boxing</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                </div>
            </li>
        </ul>
    </div>
    </li>
    <li><a href="{{url('product_details')}}"><i class="fa fa-shopping-basket"></i>Product Details</a></li>
    <li><a href="{{url('wishlist')}}"><i class="fa fa-list-alt"></i>Wishlist</a></li>
    <li><a href="{{url('shopping_cart')}}">
            <i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
    <li><a href="{{url('checkout')}}"><i class="fa fa-shopping-bag"></i>Checkout</a></li>
    <li>
        <div class="collapsible-header"><i class="fa fa-rss"></i>Blog
            <span><i class="fa fa-chevron-right"></i></span>
        </div>
        <div class="collapsible-body">
            <ul class="side-nav-panel">
                <li><a href="{{url('blog')}}">Blog</a></li>
                <li><a href="#">Blog Single</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="collapsible-header"><i class="fa fa-file-powerpoint-o"></i>Pages <span><i
                    class="fa fa-chevron-right"></i></span></div>
        <div class="collapsible-body">
            <ul class="side-nav-panel">
                <li><a href="{{url('faq')}}">Faq</a></li>
                <li><a href="{{url('testimonial')}}">Testimonial</a></li>
                <li><a href="#">404 Page</a></li>
            </ul>
        </div>
    </li>
    <li><a href="{{url('contact')}}"><i class="fa fa-envelope"></i>Contact Us</a></li>
    <li><a href="{{url('login')}}"><i class="fa fa-sign-in"></i>Login</a></li>
    <li><a href="{{url('register')}}"><i class="fa fa-user-plus"></i>Register</a></li>
    </ul>
    </div>

    <!-- panel control right -->
	<div class="panel-control-right">
		<div id="slide-out-right" class="side-nav">
			<div class="row entry">
				<div class="col s4">
					<img src="{{ asset('content/img/product2.png') }}" alt="">
				</div>
				<div class="col s6">
					<div class="desc">
						<h6>Fashion Style</h6>
						<div class="rating">
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
						</div>
						<h6><span>$18.00</span></h6>
					</div>
				</div>
				<div class="col s2">
					<div class="action">
						<i class="fa fa-remove"></i>
					</div>
				</div>
			</div>
			<div class="row entry">
				<div class="col s4">
					<img src="{{ asset('content/img/product1.png') }}" alt="">
				</div>
				<div class="col s6">
					<div class="desc">
						<h6>Men's Fashion</h6>
						<div class="rating">
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class="active"><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
							<span class=""><i class="fa fa-star"></i></span>
						</div>
						<h6><span>$20.00</span></h6>
					</div>
				</div>
				<div class="col s2">
					<div class="action">
						<i class="fa fa-remove"></i>
					</div>
				</div>
			</div>
			<div class="row price">
				<div class="col s8">
					<h6>Total</h6>
				</div>
				<div class="col s4">
					<h6>$38.00</h6>
				</div>
			</div>
			<ul>
				<li>
					<button class="button">Checkout</button>
				</li>
				<li>
					<button class="button">View Cart</button>
				</li>
			</ul>
		</div>
	</div>
	<!-- end panel control right -->

@yield('content')

@extends('layouts.footer')
