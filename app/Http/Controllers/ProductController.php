<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ProductController extends Controller
{
    public function index () {
        return view('products', [
            'products' => Product::all()
        ]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect('/products');
    }
    
    public function getCart () {
        if(!session()->has('cart')) {
            return view('cart');
        }

        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        
        return view('cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }

    public function create()
    {
        return view('dashboard.create');
    }
}
