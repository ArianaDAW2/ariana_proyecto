<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('/my_reservations', [DashboardController::class, 'my_reservations'])
    ->name('my_reservations');
Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');


