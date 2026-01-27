<?php

namespace App\Http\Controllers;

use App\Events\ContactFormEvent;
use Illuminate\Http\Request;

class documentsController extends Controller
{
    //Contact Email
    public function show_contact()
    {
        return view('public.contact');
    }

    public function send_contact(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactFormEvent::dispatch(
            $validated['title'],
            $validated['email'],
            $validated['message']
        );

        return back()->with('status', __('public.message_sent'));
    }
    //PDF
}
