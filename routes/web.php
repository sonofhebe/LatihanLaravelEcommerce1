<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Product_detailsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Shopping_cartController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/categories', [CategoriesController::class, 'categories']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/faq', [FaqController::class, 'faq']);
Route::get('/product_details', [Product_detailsController::class, 'product_details']);
Route::get('/shopping_cart', [Shopping_cartController::class, 'shopping_cart']);
Route::get('/testimonial', [TestimonialController::class, 'testimonial']);
Route::get('/wishlist', [WishlistController::class, 'wishlist']);

//Belajar CRUD
Route::resource('users',UserController::class);
