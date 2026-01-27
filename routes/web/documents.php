<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\documentsController;

Route::get('/contact', [documentsController::class, 'show_contact'])
    ->name('contact');
Route::post('/contact-send', [documentsController::class, 'send_contact'])
    ->name('contact.send');
