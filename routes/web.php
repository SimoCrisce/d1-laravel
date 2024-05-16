<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CrudController::class, 'home'])->name('home');
Route::get('/add', [CrudController::class, 'add'])->name('add');
Route::get('/delete/{id}', [CrudController::class, 'delete'])->name('delete');
Route::get('/update/{id}', [CrudController::class, 'update'])->name('update');
Route::get('/get/{id}', [CrudController::class, 'getSingle'])->name('getSingle');
Route::get('/get/{id}', [CrudController::class, 'get'])->name('get');
