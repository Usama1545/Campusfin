<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('index');
});

Route::get('/guide', function () {
    return view('guide_screen');
});

Route::get('/blogs', function () {
    return view('blogs_screen');
});

Route::get('/blogs_preview', function () {
    return view('blogs_preview');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin', function () {
    return view('dashboard');
});

// Route::get('/admin', [AdminController::class. 'index']);
