<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\emailController;
use App\Http\Controllers\catalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productsController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/news', [HomeController::class, 'news'])->name('home.news');

Route::resource('catalog', catalogController::class);

Route::get('product', [catalogController::class,'show'])->name('products.show');
Route::get('cart', [CartController::class, 'show'])->name('cart.show');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Auth::routes();
Route::post('register', [emailController::class, 'checkEmail'])->name('checkEmail');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
