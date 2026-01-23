<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function gallery()
    {
        return view('public.gallery');
    }

    public function services(Request $request)
    {
        if ($request->status == 'inactive') {
            return view('public.services', [
                'services' => Service::InActive()->paginate(10),
                'request' => $request,
            ]);
        } else {

            return view('public.services', [
                'services' => Service::Active()->paginate(10),
                'request' => $request,

            ]);
        }
    }

}
