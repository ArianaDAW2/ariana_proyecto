<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Payment;

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

    public function payments()
    {
        return view('admin.payments', [
            'payments' => Payment::all()
        ]);
    }

}
