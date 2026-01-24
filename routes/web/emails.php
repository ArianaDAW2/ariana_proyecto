<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\emailController;

Route::get('/contact', [emailController::class, 'show'])
    ->name('contact');
Route::post('/contact-send', [emailController::class, 'send'])
    ->name('contact.send');
