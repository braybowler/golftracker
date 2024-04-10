<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facade\Auth;

class ApiLoginController extends Controller
{
    public function login(Request $request): Response
    {
        $response = new Response();

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            //TODO: Authorization attempt successful, build a properly formatted response to return.
        }

        //TODO: Otherwise, authorization was unsuccesful, build a properly formatted response to return.
    }
}
