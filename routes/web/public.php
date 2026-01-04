<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/servicios', [PublicController::class, 'services'])->name('services');
Route::get('/veterinarios', [PublicController::class, 'vets'])->name('vets');
Route::get('/tarifas', [PublicController::class, 'pricing'])->name('pricing');
Route::get('/contacto', [PublicController::class, 'contact'])->name('contact');

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/livewire/counter', Counter::class)->name('counter');
