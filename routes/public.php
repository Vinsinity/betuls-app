<?php

use App\Http\Controllers\Public\AccountController;
use App\Http\Controllers\Public\CartController;
use App\Http\Controllers\Public\CategoryController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ProductController;
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
Route::get('/', [HomeController::class,'index'])->name('home');
Route::prefix('categories')->name('categories.')->group(function () {
   Route::get('/',[CategoryController::class, 'index'])->name('index');
   Route::get('{slug}',[CategoryController::class, 'show'])->name('show');
});
Route::prefix('product')->name('product.')->group(function () {
    Route::get('{slug}', [ProductController::class, 'show'])->name('show');
});
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
});
Route::middleware('auth')->group(function () {
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', [AccountController::class,'profile'])->name('profile');
        Route::prefix('orders')->name('orders.')->group(function () {
            Route::get('/', [AccountController::class,'orders'])->name('list');
            Route::get('/{number}', [AccountController::class, 'order'])->name('show');
        });
    });
});
Auth::routes();

