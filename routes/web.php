<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


// HomeController

Route::get("/", [HomeController::class, 'index']);
Route::get("/guide", [HomeController::class, 'guide_screen']);
Route::get("/blogs", [HomeController::class, 'blogs_screen']);
Route::get("/blogs_preview", [HomeController::class, 'blogs_preview']);


// AdminController

Route::get("/admin", [AdminController::class, 'index']);
Route::get("/login", [AdminController::class, 'login']);
Route::get("/register", [AdminController::class, 'register']);
Route::post("/register", [AdminController::class, 'store']);
