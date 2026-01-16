<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\{
    PetController,
    ReservationController,
    ServiceController,
    MedicalRecordController,
    PaymentController
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
/*
Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('pets', PetController::class);
    Route::apiResource('reservation', ReservationController::class);
    Route::apiResource('services', ServiceController::class);

    // Endpoints protegidos 🔐
    Route::apiResource('medical-records', MedicalRecordController::class);
    Route::apiResource('payments', PaymentController::class);
});
*/
