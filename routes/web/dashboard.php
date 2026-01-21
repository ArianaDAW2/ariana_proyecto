<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('main', [DashboardController::class, 'reservation'])
    ->name('reservation');
Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');
Route::get('main', [DashboardController::class, 'dashboard'])
    ->name('dashboard');


