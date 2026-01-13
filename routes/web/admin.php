<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MedicalRecordsCrud;
use App\Livewire\InvoicesCrud;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

Route::get('/medical-records/{petId?}', MedicalRecordsCrud::class)
    ->middleware('can:view_medical_records')
    ->name('medical-records.index');
Route::get('/invoices/{reservationId?}', InvoicesCrud::class)
    ->middleware('can:manage_reservations')
    ->name('invoices.index');

