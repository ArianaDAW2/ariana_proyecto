<?php

use App\Livewire\Counter;
use App\Livewire\ServicesCrud;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])
    ->name('home');
Route::get('/services', ServicesCrud::class)
    ->name('services');
Route::get('/vets', [PublicController::class, 'vets'])
    ->name('vets');
Route::get('/prices', [PublicController::class, 'pricing'])
    ->name('pricing');
Route::get('/gallery', [PublicController::class, 'gallery'])
    ->name('gallery');
Route::get('/contact', [PublicController::class, 'contact'])
    ->name('contact');
//Ejemplo componente
//Route::get('/livewire/counter', Counter::class)->name('counter');
