<?php

use App\Http\Controllers\AdminController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:name}', function (Category $category) {
    return view('products', [
        'products' => $category->products
    ]);
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'store']);
