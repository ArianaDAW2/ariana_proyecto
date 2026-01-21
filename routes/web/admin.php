<?php

use App\Livewire\PetsCrud;
use App\Livewire\ReservationsCrud;
use App\Livewire\ServicesCrud;
use App\Livewire\UsersCrud;
use Illuminate\Support\Facades\Route;
use App\Livewire\MedicalRecordsCrud;
use App\Livewire\InvoicesCrud;
use App\Http\Controllers\adminController;

//Admin y trabajadores

Route::get('/users', UsersCrud::class)
    ->name('users-admin');
Route::get('/services', ServicesCrud::class)
    ->name('services');
Route::get('/reservations-admin', ReservationsCrud::class)
    ->name('reservations-admin');
Route::get('/medical-records', MedicalRecordsCrud::class)
    ->name('medical-records');
Route::get('/Pets-admin', PetsCrud::class)
    ->name('pets-admin');
Route::get('/invoices', InvoicesCrud::class)
    ->name('invoices-admin');
Route::get('/control-panel', [adminController::class, 'panel'])
    ->name('panel-admin');
