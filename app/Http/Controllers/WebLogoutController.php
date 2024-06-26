<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebLogoutController extends Controller
{
    public function show(Request $request)
    {
        return view('logout');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
