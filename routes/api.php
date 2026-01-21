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
Route::apiResource('invoices', invoicesCrudController::class);
Route::apiResource('medical-records', medicalRecordsCrudController::class);
Route::apiResource('reservations', reservationsCrudController::class);
Route::apiResource('services', servicesCrudController::class);
Route::apiResource('pets', petsCrudController::class);
Route::apiResource('users', usersCrudController::class);
//Sin CRUD
Route::get('payments', [paymentsController::class, 'payment']);

