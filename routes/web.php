<?php

use App\Http\Controllers\WebLoginController;
use App\Http\Controllers\WebRegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [WebLoginController::class, 'show'])->name('login.show');
Route::post('/login', [WebLoginController::class, 'login'])->name('login.login');

Route::get('/register', [WebRegistrationController::class, 'show'])->name('register.show');
Route::post('/register', [WebRegistrationController::class, 'register'])->name('register.register');