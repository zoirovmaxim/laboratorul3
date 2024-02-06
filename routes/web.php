<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::redirect('/', '/users');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
//Phone




