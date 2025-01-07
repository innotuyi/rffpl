<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:newsletters,email', // Ensure the email is unique
        ]);

        // Save the email to the newsletter table
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'You have successfully subscribed to the newsletter!');
    }
}
