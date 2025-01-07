<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form (frontend)
    public function create()
    {
        return view('contact.create');
    }

    // Store the submitted contact form data (frontend)
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Store the contact message in the database
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Redirect back with a success message
        return redirect()->route('contact.create')->with('success', 'Your message has been sent successfully!');
    }

    // Show all submitted contact messages (for admin)
    public function index()
    {
        // Get all contact messages, you can paginate if needed
        $contacts = Contact::latest()->paginate(10);
        
        // Return the view with contacts
        return view('admin.contact.index', compact('contacts'));
    }

    // Delete a contact message (for admin)
    public function destroy($id)
    {
        // Find the contact by ID and delete
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect back to the contacts page with a success message
        return redirect()->route('admin.contact.index')->with('success', 'Contact message deleted successfully!');
    }
}
