<?php

namespace App\Http\Controllers;

use App\Models\Pet;

class HomeController extends Controller
{
    public function __invoke()
    {
        $testPets = Pet::first()->name;

        return view('home',compact('testPets'));
    }
}
