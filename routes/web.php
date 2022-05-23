<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

Route::get('/', [StoreController::class, 'index'])->name('home');
Route::get('/carrinho', [CartController::class, 'index'])->name('cart');
Route::get('/meu-perfil', [UserController::class, 'profile'])->name('user.profile');