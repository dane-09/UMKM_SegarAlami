<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = contact::all();
        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'nullable|string|max:255',
            'no' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);
        $contact = new contact;
        $contact->lokasi = $request->lokasi;
        $contact->no = $request->no;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->route('contact.index')->with('success', 'contact berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        $request->validate([
            'lokasi' => 'nullable|string|max:255',
            'no' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',

        ]);
        $contact->lokasi = $request->lokasi;
        $contact->no = $request->no;
        $contact->email = $request->email;

        $contact->save();

        return redirect()->route('contact.index')->with('success', 'contact berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'contact berhasil dihapus!');
    }
}
