<?php

use App\Http\Controllers\APIControllers\{
    invoicesAPICrud,
    medicalRecordsAPICrud,
    paymentsAPI,
    petsAPICrud,
    resservationsAPICrud,
    servicesAPICrud,
    usersAPICrud
};
use Illuminate\Support\Facades\Route;

//CRUDS

Route::apiResource('invoices', invoicesAPICrud::class);
Route::apiResource('medical-records', medicalRecordsAPICrud::class);
Route::apiResource('reservations', resservationsAPICrud::class);
Route::apiResource('services', servicesAPICrud::class);
Route::apiResource('pets', petsAPICrud::class);
Route::apiResource('users', usersAPICrud::class);
//Sin CRUD
Route::get('payments', [paymentsAPI::class, 'payment']);

