<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\ShopingCartController;
use App\Http\Controllers\SupplierController;

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
Route::get('/shop-grid', [BarangController::class, 'shopgrid']);
Route::get('/user', [PelangganController::class, 'user']);
Route::get('/employee', [PegawaiController::class, 'employee']);
Route::get('/supplier', [SupplierController::class, 'supplier']);
Route::get('/shop-details', [ShopDetailsController::class, 'shopdetails']);
Route::get('/shoping-cart', [ShopingCartController::class, 'shopingcarts']);
Route::get('/checkout', [HomeController::class, 'checkout']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


