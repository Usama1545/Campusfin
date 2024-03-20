<?php

use Illuminate\Support\Facades\Route;



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
