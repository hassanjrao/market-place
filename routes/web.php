<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\NewsFeedController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Example Routes
Route::view('/', 'front.home')->name('landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth"])->group(function () {

    Route::resource("news-feeds",NewsFeedController::class);

    Route::resource("products",ProductController::class);

    Route::post("carts/remove", [CartController::class, "remove"])->name("carts.remove");
    Route::resource("carts",CartController::class);

    Route::post("payments/store", [PaymentController::class, "store"])->name("payments.store");

});
