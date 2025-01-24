<?php

use App\Http\Controllers\Users\Brand;
use App\Http\Controllers\Users\Home;
use App\Http\Controllers\Users\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class,'index'])->name('home');

Route::get('/brand/{slug}', [Brand::class,'show'])->name('brand');

Route::get('/brand/product/{brand_slug}/{slug}', [Product::class, 'show'])->name('product');
