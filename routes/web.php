<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/books', [FrontendController::class,'books'])->name('books');
Route::get('/training', [FrontendController::class,'training'])->name('training');
Route::get('/logout', [FrontendController::class,'logout'])->name('logout');
Route::post('/logout', [AuthController::class,'logout']);
Route::get('/login', [FrontendController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'login']);
Route::get('/signup', [FrontendController::class,'signUp'])->name('signup');
Route::post('/register', [AuthController::class,'register']);
