<?php

use App\Livewire\PetsCrud;
use App\Livewire\ReservationsCrud;
use Illuminate\Support\Facades\Route;
use App\Livewire\MedicalRecordsCrud;
use App\Livewire\InvoicesCrud;
use App\Http\Controllers\adminController;

//Admin y trabajadores

Route::resource('users', adminController::class);

Route::get('/reservations-admin', ReservationsCrud::class)
    ->middleware('can:manage_reservations')
    ->name('Reservations-admin');
Route::get('/medical-records', MedicalRecordsCrud::class)
    ->middleware('can:manage_medical_records')
    ->name('medical-records');
Route::get('/Pets-admin', PetsCrud::class)
    ->middleware('can:manage_users')
    ->name('Pets-admin');
Route::get('/invoices', InvoicesCrud::class)
    ->middleware('can:manage_payments')
    ->name('Invoices');
Route::get('/control-panel', adminController::class)
    ->middleware('can:manage_users')
    ->name('control-panel');
