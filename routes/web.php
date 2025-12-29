<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/gallery', GalleryController::class)->name('gallery');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/livewire/counter', Counter::class)->name('counter');
