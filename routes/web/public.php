<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');
Route::view('/servicios', 'public.services')->name('services');
Route::view('/veterinarios', 'public.vets')->name('vets');
Route::view('/tarifas', 'public.pricing')->name('pricing');
Route::view('/contacto', 'public.contact')->name('contact');
