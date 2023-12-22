<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return inertia('Frontend/Contact/Index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        // dd($request->all());

        // TODO: Save contact form data to database

        // Send email to admin
        // Mail::to(config('mail.from.address'))->send(new ContactForm($request));

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
