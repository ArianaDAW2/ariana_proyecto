<?php

namespace App\Http\Controllers;

use App\Events\ContactFormSubmitEvent;
use Illuminate\Http\Request;

class emailController extends Controller
{
    public function show()
    {
        return view('public.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        ContactFormSubmitEvent::dispatch(
            $validated['title'],
            $validated['email'],
            $validated['message']
        );

        return back()->with('status', __('public.message_sent'));
    }
}
