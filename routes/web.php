<?php

use Illuminate\Support\Facades\Route;
// use App\Livewire\ListProducts;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/products', App\Livewire\ListProducts::class)
    ->middleware('auth')
    ->name('products');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';