<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);


        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
        ]);


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

