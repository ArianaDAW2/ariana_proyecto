<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function services()
    {
        return view('public.services', [
            'services' => Service::active()->paginate(10)
        ]);
    }

    public function vets()
    {
        return view('public.vets');
    }

    public function pricing()
    {
        return view('public.pricing');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function gallery()
    {
        return view('public.gallery');
    }
}
