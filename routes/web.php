<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');


// Auth 
Route::get('login', [LoginController::class,'index'])->name('login');