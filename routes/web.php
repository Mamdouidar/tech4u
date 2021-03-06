<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']); 
Route::get('/categories/{category:name}', [CategoryController::class, 'showProducts']);

Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('product.addToCart');

Route::get('/cart', [ProductController::class, 'getCart']);

Route::post('/order', [OrderController::class, 'store']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'store']);

Route::get('/dashboard', [ProductController::class, 'main'])->middleware('admin');
Route::get('/dashboard/create', [ProductController::class, 'create'])->middleware('admin');
Route::get('/dashboard/read', [ProductController::class, 'read'])->middleware('admin');


Route::get('/dashboard/update/{product}', [ProductController::class, 'edit'])->middleware('admin');

Route::post('/admin', [ProductController::class, 'store'])->middleware('admin');
Route::patch('/admin/{product}', [ProductController::class, 'update'])->middleware('admin');
Route::delete('/admin/{product}', [ProductController::class, 'destroy'])->middleware('admin');