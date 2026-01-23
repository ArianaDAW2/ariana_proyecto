<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])
    ->name('home');
Route::get('/services', [PublicController::class, 'services'])
    ->name('services');
Route::get('/gallery', [PublicController::class, 'gallery'])
    ->name('gallery');
Route::get('/contact', [PublicController::class, 'contact'])
    ->name('contact');

