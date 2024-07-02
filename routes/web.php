<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Product route 
Route::resource('products', ProductController::class);
Route::get('productDetails', [ProductController::class,'showDetails']);