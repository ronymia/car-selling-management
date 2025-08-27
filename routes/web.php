<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


// HOME ROUTE
Route::get('/', [HomeController::class, 'index'])->name('home');


// GUEST ROUTE
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');


// CAR ROUTES
Route::get('/cars/search', [CarController::class, 'search'])->name('cars.search');
Route::resource('cars', CarController::class);
