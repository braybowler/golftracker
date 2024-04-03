<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WebRegistrationController extends Controller
{
    public function show(Request $request)
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email|unique:users',
            'name' => 'required|string',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect()->intended('/login');
    }
}
