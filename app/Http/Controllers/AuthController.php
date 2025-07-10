<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        User::create($validated);

        return redirect()->route('auth.login')->with('msg', 'Your registration was successful. Please login to your account.');
    }

    public function login()
    {

    }

    public function read()
    {

    }
}
