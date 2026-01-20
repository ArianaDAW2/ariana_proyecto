<?php

use App\Http\Controllers\APIControllers\{
    invoicesCrudController,
    medicalRecordsCrudController,
    paymentsController,
    petsCrudController,
    reservationsCrudController,
    servicesCrudController,
    usersCrudController
};
use Illuminate\Support\Facades\Route;

//CRUDS
Route::apiResource('invoices', invoicesCrudController::class)
    ->middleware('can:manage_payments');
Route::apiResource('medical-records', medicalRecordsCrudController::class)
    ->middleware('can:manage_medical_records');
Route::apiResource('reservations', reservationsCrudController::class)
    ->middleware('can:manage_reservations');
//Para Api solo requiere autenticación
Route::apiResource('services', servicesCrudController::class);

Route::apiResource('pets', petsCrudController::class)
    ->middleware('can:manage_users');
Route::apiResource('users', usersCrudController::class)
    ->middleware('can:manage_users');
//Sin CRUD
Route::get('/statuses', [paymentsController::class, 'payment'])
    ->middleware('can:manage_payments');

