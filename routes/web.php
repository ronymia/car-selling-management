<?php

use Illuminate\Support\Facades\Route;


// HOME ROUTE
Route::get('/', function () {
    return view('home.index');
});


Route::get('/about', function () {
    return view('about');
});
