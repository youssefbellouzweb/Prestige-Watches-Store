<?php

use App\Http\Controllers\Frontend\Brand;
use App\Http\Controllers\Frontend\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
})->name('index');

Route::get('/brand/{slug}', [Brand::class,'show'])->name('brand');

Route::get('/product/{slug}', [Product::class,'show'])->name('product');
