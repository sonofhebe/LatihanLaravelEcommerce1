<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/categories', [HomeController::class, 'categories']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/product_details', [HomeController::class, 'product_details']);
Route::get('/shopping_cart', [HomeController::class, 'shopping_cart']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/wishlist', [HomeController::class, 'wishlist']);
Route::get('/table', [HomeController::class, 'table']);

//CRUD
Route::resource('users',UserController::class);
