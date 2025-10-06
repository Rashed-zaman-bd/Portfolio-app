<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Store new contact message
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'nullable|string|max:1000',
        ]);

        $contact = Contact::create($validated);

        return response()->json([
            'message' => 'Message sent successfully!',
            'data' => $contact,
        ], 201);
    }

    // Optional: list all contacts (for admin)
    public function index()
    {
        $contacts = Contact::latest()->get();
        return response()->json($contacts);
    }
}
