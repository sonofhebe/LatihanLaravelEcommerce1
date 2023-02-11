<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopping_cartController extends Controller
{
    public function shopping_cart()
    {
        return view('frontend.app.shopping_cart');
    }
}
