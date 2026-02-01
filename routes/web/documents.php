<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\documentsController;

//Contacto
Route::get('/contact', [documentsController::class, 'show_contact'])
    ->name('contact');
Route::post('/contact-send', [documentsController::class, 'send_contact'])
    ->name('contact.send');
//Admin mail global
Route::get('/admin/extra/create', [documentsController::class, 'show_adminMessage'])
    ->name('admin.extra.create');
Route::post('/admin/extra/send', [documentsController::class, 'send_adminMessage'])
    ->name('admin.message');
//Facturas trimestral
Route::get('/pdf/invoices', [documentsController::class, 'print_invoices'])
    ->name('print.invoices');
//Usuarios morosos
Route::get('/admin/morosos', [documentsController::class, 'print_morosos'])
    ->name('print.morosos');
