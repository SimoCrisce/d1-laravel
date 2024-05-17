<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');