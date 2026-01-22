<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }


    public function vets()
    {
        return view('public.vets');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function gallery()
    {
        return view('public.gallery');
    }

    public function services()
    {
        return view('public.services', [
            'services' => Service::Active()->paginate(10),
        ]);
    }

    public function NotServices()
    {
        return view('public.NotServices', [
            'services' => Service::InActive()->paginate(10),
        ]);
    }
}
