<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');


