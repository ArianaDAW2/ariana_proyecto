<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('/my_reservations', [DashboardController::class, 'my_reservations'])
    ->name('my_reservations');
Route::get('/top_buyers', [DashboardController::class, 'top_buyers'])
    ->name('top_buyers');
Route::get('/top_services', [DashboardController::class, 'top_services'])
    ->name('top_services');


