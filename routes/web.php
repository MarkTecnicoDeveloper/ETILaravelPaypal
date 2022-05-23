<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CartController;

Route::get('/', [StoreController::class, 'index'])->name('home');
Route::get('/carrinho', [CartController::class, 'index'])->name('cart');