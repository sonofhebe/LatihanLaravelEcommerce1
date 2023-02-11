<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product_detailsController extends Controller
{
    public function product_details()
    {
        return view('frontend.app.product_details');
    }
}
