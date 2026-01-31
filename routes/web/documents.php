<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\documentsController;

//Contact
Route::get('/contact', [documentsController::class, 'show_contact'])
    ->name('contact');
Route::post('/contact-send', [documentsController::class, 'send_contact'])
    ->name('contact.send');
//Admin Message
Route::get('/admin/extra/create', [documentsController::class, 'show_adminMessage'])
    ->name('admin.extra.create');
Route::post('/admin/extra/send', [documentsController::class, 'send_adminMessage'])
    ->name('admin.extra.send');
