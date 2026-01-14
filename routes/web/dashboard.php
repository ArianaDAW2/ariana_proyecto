<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\InvoicesCrud;
use App\Livewire\PetsCrud;
use App\Livewire\ReservationsCrud;
use Illuminate\Support\Facades\Route;

Route::get('main', DashboardController::class)->name('dashboard');
Route::get('reservations', ReservationsCrud::class)->name('ReservationsCrud');
Route::get('pets', PetsCrud::class)->name('PetsCrud');
Route::get('invoices', InvoicesCrud::class)->name('invoicesCrud');

