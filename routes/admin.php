<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CargoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UsersController;
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

Route::prefix('admin')->name('admin.')->group(function () {
//   Auth::routes();
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('login',[LoginController::class, 'loginForm'])->name('login');
        Route::post('login',[LoginController::class, 'login']);
        Route::get('logout',[LoginController::class, 'logout'])->name('logout');

        Route::get('register',[RegisterController::class, 'registerForm'])->name('register');
        Route::post('register',[RegisterController::class, 'register']);
    });
    Route::middleware('auth.admin')->group(function (){

        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/',[DashboardController::class,'index'])->name('index');
        });

        Route::prefix('products')->name('products.')->group(function () {
            Route::prefix('products')->name('products.')->group(function () {
                Route::get('list',[ProductController::class,'list'])->name('list');
                Route::get('add',[ProductController::class,'add'])->name('add');
                Route::post('add',[ProductController::class,'addPost'])->name('addPost');
                Route::post('image',[ProductController::class,'image'])->name('image');
                Route::get('show/{slug}', [ProductController::class, 'show'])->name('show');
                Route::post('update/{slug}', [ProductController::class, 'update'])->name('update');
            });
            Route::prefix('categories')->name('categories.')->group(function () {
                Route::get('list',[CategoryController::class,'list'])->name('list');
                Route::get('add',[CategoryController::class,'add'])->name('add');
                Route::post('add',[CategoryController::class,'addPost'])->name('addPost');
                Route::post('image',[CategoryController::class,'image'])->name('image');
            });
            Route::prefix('brands')->name('brands.')->group(function () {
                Route::get('list',[BrandController::class,'list'])->name('list');
                Route::get('add',[BrandController::class,'add'])->name('add');
                Route::post('add',[BrandController::class,'addPost'])->name('addPost');
                Route::post('image',[BrandController::class,'image'])->name('image');
            });
        });

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('list',[UsersController::class,'list'])->name('list');
        });

        Route::prefix('orders')->name('orders.')->group(function () {
            Route::get('list',[OrderController::class,'list'])->name('list');
            Route::get('show/{number}',[OrderController::class,'show'])->name('show');
            Route::post('update/{number}', [OrderController::class,'update'])->name('update');
        });

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::prefix('seo')->name('seo.')->group(function () {
                Route::get('setting',[SettingController::class,'seo'])->name('setting');
                Route::post('setting',[SettingController::class,'seoStore'])->name('store');
            });
            Route::prefix('cargos')->name('cargos.')->group(function () {
                Route::get('list',[CargoController::class,'list'])->name('list');
            });
            Route::prefix('company')->name('company.')->group(function () {
                Route::get('setting',[SettingController::class,'company'])->name('setting');
                Route::post('setting',[SettingController::class,'companyStore'])->name('store');
            });
        });
    });
});
