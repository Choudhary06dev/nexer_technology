<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->full_phone ?? $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send email notification
        Mail::to('amjad.softdev@gmail.com')->send(new ContactMail($contact->toArray()));

        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Your message has been sent successfully!'
            ]);
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
