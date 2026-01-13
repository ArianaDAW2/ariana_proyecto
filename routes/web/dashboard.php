<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DashboardStats;
use App\Http\Livewire\PetsCrud;
use App\Http\Livewire\ReservationsCrud;
use App\Http\Livewire\InvoicesCrud;
use App\Livewire\ServicesCrud;

Route::get('/servicios', ServicesCrud::class)->name('services.index');
/*
Route::get('/dashboard', DashboardStats::class)->name('dashboard');

Route::get('/mascotas', PetsCrud::class)->name('pets.index');
Route::get('/reservas', ReservationsCrud::class)->name('reservation.index');
Route::get('/facturas', InvoicesCrud::class)->name('invoices.index');
*/
