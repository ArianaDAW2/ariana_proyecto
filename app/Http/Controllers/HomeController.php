<?php

namespace App\Http\Controllers;

use App\Models\Pet;

class HomeController extends Controller
{
    public function __invoke()
    {

        return view('home', [
            'title' => 'Home'
        ]);
    }
}
