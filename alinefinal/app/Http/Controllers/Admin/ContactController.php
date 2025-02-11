<?php

namespace App\Http\Controllers\Admin;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    // Show the form to create a new blog
    public function create()
    {
        return view('admin.contact.create');
    }

    // Store a new blog
    public function store(Request $request)
    {
         $request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'nullable|string|max:255',
        ]);
        $contact = new Contact();
        $contact->city = $request->city;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
       
    
        return redirect()->route('admin.contact.index')->with('success', 'Blog created successfully.');
    }
    // Show the form to edit a blog
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    // Update a blog
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'city' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'address' => 'nullable|string|max:255',
        ]);

          // Find the contact by ID
    $contact = Contact::findOrFail($id);

    // Update the contact with validated data
    $contact->update($validated);
    
        return redirect()->route('admin.contact.index')->with('success', 'Blog updated successfully.');
    }

    // Delete a blog
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Blog deleted successfully.');
    }

    // Show the details of a single blog
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }
}
