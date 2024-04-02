<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facade\Auth;

class WebLoginController extends Controller
{
    public function show(Request $request) 
    {
        return view('login');
    }

    public function login(Request $request) 
    {
        //TODO
    }
}
