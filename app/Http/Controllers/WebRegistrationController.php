<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facade\Auth;

class WebRegistrationController extends Controller
{
    public function show(Request $request) 
    {
        return view('register');
    }

    public function register(Request $request) 
    {
        //TODO
    }
}
