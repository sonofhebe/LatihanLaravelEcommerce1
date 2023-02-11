@extends('frontend.app')

@section('content')
@include('frontend.items.slider')
{{-- Start Index --}}
    <div class="categories-home">
        <div class="container">
            <div class="app-title">
                <h4>Categories</h4>
            </div>
            <div class="row"><div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-male"></i>
                        <h6>Fashion</h6>
                    </a></div>
            </div>
            <div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-soccer-ball-o"></i>
                        <h6>Sport</h6>
                    </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-laptop"></i>
                        <h6>Laptop</h6>
                    </a></div>
            </div>
            <div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-mobile"></i>
                        <h6>Smartphone</h6>
                    </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-book"></i>
                        <h6>Book</h6>
                    </a></div>
            </div>
            <div class="col s6">
                <div class="entry"><a href=""><i class="fa fa-camera-retro"></i>
                        <h6>Camera</h6>
                    </a></div>
            </div>
        </div>
    </div>
    </div>
    <div class="product app-section-home">
        <div class="container">
            <div class="app-title">
                <h4>Best Sellers</h4>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="entry"><img src="content/img/product1.png" alt="">
                        <h6><a href="">Men's Fashion</a>
                        </h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$350</h5>
                        </div><button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO
                                CART</span></button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="entry"><img src="content/img/product2.png" alt="">
                        <h6><a href="">Fashion</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$26</h5>
                        </div>
                        <button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="entry"><img src="content/img/product3.png" alt="">
                        <h6><a href="">Style Fashion</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class=""><i
                                    class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$14</h5>
                        </div>
                        <button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span></button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="entry"><img src="content/img/product4.png" alt="">
                        <h6><a href="">Men's Style</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span><span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$54</h5>
                        </div><button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product app-section-home">
        <div class="container">
            <div class="app-title">
                <h4>New Product</h4>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="entry"><img src="content/img/product5.png" alt="">
                        <h6><a href="">Fashion</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$43</h5>
                        </div>
                        <button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span></button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="entry"><img src="content/img/product6.png" alt="">
                        <h6><a href="">New Fashion</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$140</h5>
                        </div>
                        <button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class="entry"><img src="content/img/product7.png" alt="">
                        <h6><a href="">Dress Style</a></h6>
                        <div class="rating">
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class=""><i
                                    class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$17</h5>
                        </div>
                        <button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO CART</span></button>
                    </div>
                </div>
                <div class="col s6">
                    <div class="entry"><img src="content/img/product8.png" alt="">
                        <h6><a href="">Women's Dress</a></h6>
                        <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span
                                class="active"><i class="fa fa-star"></i></span>
                            <span class="active"><i class="fa fa-star"></i></span><span class="active"><i
                                    class="fa fa-star"></i></span>
                            <span class=""><i class="fa fa-star"></i></span>
                        </div>
                        <div class="price">
                            <h5>$30</h5>
                        </div><button class="product-btn"><i class="fa fa-shopping-bag"></i> <span>ADD TO
                                CART</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="pagination">
                        <ul>
                            <li><a href="">First</a></li>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">Last</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Index --}}
    
@endsection

    