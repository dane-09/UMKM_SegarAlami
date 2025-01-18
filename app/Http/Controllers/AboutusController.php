<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = aboutus::all();
        return view('aboutus.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_tagline'=> 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);
        $aboutus = new aboutus;
        $aboutus->sub_tagline = $request->sub_tagline;
        $aboutus->tagline = $request->tagline;
        $aboutus->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $aboutus->gambar = $request->file('gambar')->store('images', 'public');
        }
        $aboutus->save();
        return redirect()->route('aboutus.index')->with('success', 'Aboutus berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aboutus $aboutu)
    {
        return view('aboutus.edit', compact('aboutu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aboutus $aboutu)
    {
        $request->validate([
            'sub_tagline'=> 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:500',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);
        $aboutu->sub_tagline = $request->sub_tagline;
        $aboutu->tagline = $request->tagline;
        $aboutu->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            if ($aboutu->gambar) {
                Storage::delete('public/' . $aboutu->gambar);
            }
            $aboutu->gambar = $request->file('gambar')->store('images', 'public');
        }
        $aboutu->save();
        return redirect()->route('aboutus.index')->with('success', 'aboutus berhasil diUpdaate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aboutus $aboutu)
    {
        if ($aboutu->gambar) {
            Storage::delete('public/' . $aboutu->gambar);
            $aboutu->delete();

            return redirect()->route('aboutus.index')->with('success', 'aboutus berhasil dihapus!');
        }
    }
}
