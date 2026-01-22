<?php

namespace App\Http\Controllers;

class adminController extends Controller
{
    public function panel()
    {
        return view('panel');
    }

    public function invoices()
    {
        return view('admin.invoices');
    }

    public function medicalRecords()
    {
        return view('admin.medical-records');
    }

    public function pets()
    {
        return view('admin.pets');
    }

    public function reservations()
    {
        return view('admin.reservations');
    }

    public function services()
    {
        return view('admin.services');
    }

    public function users()
    {
        return view('admin.users');
    }


}
