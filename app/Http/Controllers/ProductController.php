<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
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

    public function main()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function read()
    {
        return view('dashboard.read', [
            'products' => Product::paginate(50)
        ]);
    }

    public function edit(Product $product)
    {
        return view('dashboard.update', [
            'product' => $product
        ]);
    }  

    public function store()
    {
        //dd(request()->file('src'));
        $attributes = request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'amount' => ['required'],
            'src' => ['required', 'image'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['src'] = request()->file('src')->store('images');

        Product::create($attributes);

        return redirect('/dashboard');
    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'amount' => ['required'],
            'src' => ['image'],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if(isset($attributes['src'])) {
            $attributes['src'] = request()->file('src')->store('images');
        }

        $product->update($attributes);

        return redirect('/dashboard/read');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/dashboard/read');
    }
}
