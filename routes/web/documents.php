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
    ->middleware(['auth', 'permission:access_worker'])
    ->name('admin.extra.create');
Route::post('/admin/extra/send', [documentsController::class, 'send_adminMessage'])
    ->middleware(['auth', 'permission:access_worker'])
    ->name('admin.message');
//Facturas trimestral
Route::get('/pdf/invoices', [documentsController::class, 'print_invoices'])
    ->middleware(['auth', 'permission:access_worker'])
    ->name('print.invoices');
//Usuarios morosos
Route::get('/admin/morosos', [documentsController::class, 'print_morosos'])
    ->middleware(['auth', 'permission:access_worker'])
    ->name('print.morosos');
//Contratos
Route::get('/admin/contracts', [documentsController::class, 'print_reservations'])
    ->middleware(['auth', 'permission:access_worker'])
    ->name('print.reservations');
Route::get('/admin/contracts/{filename}', [documentsController::class, 'download_reservations'])
    ->middleware(['auth', 'permission:access_worker'])
    ->name('download.reservations');
