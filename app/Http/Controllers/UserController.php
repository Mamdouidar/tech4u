<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/dashboard');
        }
    }
}
