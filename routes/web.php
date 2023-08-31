<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsFeedController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
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
Route::get("/",[LandingPageController::class,"index"])->name("front.landing");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(["auth"])->group(function () {

    Route::resource("news-feeds",NewsFeedController::class);

    Route::get("products/user",[ProductController::class,"userProducts"])->name("products.user");
    Route::resource("products",ProductController::class);

    Route::post("carts/remove", [CartController::class, "remove"])->name("carts.remove");
    Route::resource("carts",CartController::class);

    Route::post("payments/store", [PaymentController::class, "store"])->name("payments.store");


    Route::post("orders/update-status", [UserProfileController::class, "orderUpdateStatus"])->name("orders.update-status");
    Route::get("orders/{id}/details", [UserProfileController::class, "orderDetails"])->name("orders.details");
    Route::get("orders/user", [UserProfileController::class, "userOrders"])->name("orders.user");
    Route::resource('profile', UserProfileController::class);

});



Route::prefix("admin")->name("admin.")->middleware(["auth","role:admin"])->group(function () {

    Route::get("/", [AdminDashboardController::class, "index"])->name("dashboard");
    Route::resource("users",AdminUserController::class);

    Route::resource("products",AdminProductController::class);
    Route::resource("categories", AdminCategoryController::class);
    Route::resource("orders",AdminOrderController::class);
    Route::resource("profile",AdminProfileController::class);

});
