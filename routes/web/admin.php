<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ServicesCrud;
use App\Livewire\MedicalRecordsCrud;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

Route::get('/services', ServicesCrud::class)->name('services.index');
Route::get('/medical-records', MedicalRecordsCrud::class)->name('medical-records.index');

