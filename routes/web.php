<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/shop-grid', [BarangController::class, 'shopgrid']);
Route::get('/user', function () {
    return view('user');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/supplier', function () {
    return view('supplier');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/shop-details', function () {
    return view('shop-details');
});
Route::get('/shoping-cart', function () {
    return view('shoping-cart');
});
