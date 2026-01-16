<?php

use App\Livewire\PetsCrud;
use App\Livewire\ReservationsCrud;
use App\Livewire\UsersCrud;
use Illuminate\Support\Facades\Route;
use App\Livewire\MedicalRecordsCrud;
use App\Livewire\InvoicesCrud;
use App\Http\Controllers\adminController;

//Admin y trabajadores

Route::get('users', UsersCrud::class)
    ->middleware('can:manage-users')
    ->names('users-admin');
Route::get('/reservations-admin', ReservationsCrud::class)
    ->middleware('can:manage_reservations')
    ->name('reservations-admin');
Route::get('/medical-records', MedicalRecordsCrud::class)
    ->middleware('can:manage_medical_records')
    ->name('medical-records');
Route::get('/Pets-admin', PetsCrud::class)
    ->middleware('can:manage_users')
    ->name('pets-admin');
Route::get('/invoices', InvoicesCrud::class)
    ->middleware('can:manage_payments')
    ->name('invoices-admin');
Route::get('/control-panel', [adminController::class, 'panel'])
    ->middleware('can:manage_users')
    ->name('panel-admin');
