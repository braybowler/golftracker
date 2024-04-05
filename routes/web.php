<?php

use App\Http\Controllers\BagController;
use App\Http\Controllers\WebLoginController;
use App\Http\Controllers\WebLogoutController;
use App\Http\Controllers\WebRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [WebLoginController::class, 'show'])->name('login.show');
Route::post('/login', [WebLoginController::class, 'login'])->name('login.login');

Route::get('/logout', [WebLogoutController::class, 'show'])->name('logout.show');
Route::post('/logout', [WebLogoutController::class, 'logout'])->name('logout.logout');

Route::get('/register', [WebRegistrationController::class, 'show'])->name('register.show');
Route::post('/register', [WebRegistrationController::class, 'register'])->name('register.register');

Route::resource('bags', BagController::class);
