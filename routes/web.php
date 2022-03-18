<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
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
Route::get('/user', [PelangganController::class, 'user']);
Route::get('/employee', [PegawaiController::class, 'employee']);
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
