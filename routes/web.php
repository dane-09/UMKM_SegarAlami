<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aboutus', AboutusController::class);
Route::resource('product', ProductController::class);
Route::resource('service', ServiceController::class);
