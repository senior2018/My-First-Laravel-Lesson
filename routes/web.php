<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'index']);
Route::get('/create', [UsersController::class, 'create'])->name('create');
Route::post('/store', [UsersController::class, 'store'])->name('store');
Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [UsersController::class, 'update'])->name('update');
Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');
