<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }
    
    public function register()
    {
        return view('register');
    }
    
    public function blog()
    {
        return view('blog');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function faq()
    {
        return view('faq');
    }
    
    public function checkout()
    {
        return view('checkout');
    }
    
    public function categories()
    {
        return view('categories');
    }
    
    public function product_details()
    {
        return view('product_details');
    }
    
    public function shopping_cart()
    {
        return view('shopping_cart');
    }
    
    public function testimonial()
    {
        return view('testimonial');
    }
    
    public function wishlist()
    {
        return view('wishlist');
    }
    
    public function table()
    {
        return view('table');
    }
}
