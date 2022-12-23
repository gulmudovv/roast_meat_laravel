<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RestaurantController;
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

Route::get('/', [RestaurantController::class, 'index'])->name('restaurant.index');
Route::get('/restaurant/create',[RestaurantController::class, 'create'])->name('restaurant.create');
Route::post('/',[RestaurantController::class, 'store'])->name('restaurant.store');
Route::get('/rest/{id}',[RestaurantController::class, 'show'])->name('restaurant.show');

Route::get('/rest',[ProductController::class, 'index'])->name('product.index');

Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/rest',[ProductController::class, 'store'])->name('product.store');
