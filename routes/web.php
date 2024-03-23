<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


// HomeController

Route::get("/", [HomeController::class, 'index']);
Route::get("/guide", [HomeController::class, 'guide_screen']);
Route::get("/blogs", [HomeController::class, 'blogs_screen']);
Route::get("/blogs_preview", [HomeController::class, 'blogs_preview']);


// AdminController

Route::get("/admin", [AdminController::class, 'index']);
// login system

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// employee regiseration
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);
