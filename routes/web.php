<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Product route 
Route::resource('products', ProductController::class);
Route::get('productDetails', [ProductController::class,'showDetails']);
Route::get('panier', [ProductController::class,'showpanier']);
Route::get('dashboard', [DashboardController::class,'index']);