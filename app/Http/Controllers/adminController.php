<?php

namespace App\Http\Controllers;

class adminController extends Controller
{
    public function __invoke()
    {
        return view('panel');
    }

}
