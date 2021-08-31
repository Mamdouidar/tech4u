<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required','min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required'],
            'address' => ['required']
        ]);

        Order::create($attributes);

        if (session()->has('cart')) {
            session()->pull('cart');
        }

        return redirect('/');
    }
}
