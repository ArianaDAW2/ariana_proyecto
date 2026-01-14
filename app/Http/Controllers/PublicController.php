<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function services()
    {
        return view('public.services');
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
