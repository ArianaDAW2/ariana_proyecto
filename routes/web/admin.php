<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

//Admin y trabajadores

Route::get('/users', [adminController::class, 'users'])
    ->name('users');
Route::get('/services', [adminController::class, 'services'])
    ->name('services');
Route::get('/reservations', [adminController::class, 'reservations'])
    ->name('reservations');
Route::get('/medical-records', [adminController::class, 'medicalRecords'])
    ->name('medical-records');
Route::get('/Pets', [adminController::class, 'pets'])
    ->name('pets');
Route::get('/invoices', [adminController::class, 'invoices'])
    ->name('invoices');
Route::get('/control-panel', [adminController::class, 'panel'])
    ->name('panel-admin');

