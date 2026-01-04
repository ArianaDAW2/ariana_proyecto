<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/servicios', 'public.services')->name('services');
Route::view('/veterinarios', 'public.vets')->name('vets');
Route::view('/tarifas', 'public.pricing')->name('pricing');
Route::view('/contacto', 'public.contact')->name('contact');

Route::get('/', HomeController::class)->name('home');

Route::get('/gallery', GalleryController::class)->name('gallery');

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
