<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = gallery::all();
        return view('gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'alt_text' => 'nullable|string|max:255',
        ]);
        $gallery = new gallery;
        $gallery->alt_text = $request->alt_text;

        if ($request->hasFile('gambar')) {
            $gallery->gambar = $request->file('gambar')->store('images', 'public');
        }
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'gallery berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery)
    {
        $request->validate([
            'alt_text' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);
        $gallery->alt_text = $request->alt_text;


        if ($request->hasFile('gambar')) {
            if($gallery->gambar){
                Storage::delete('public/'. $gallery->gambar);
            }
            $gallery->gambar= $request->file('gambar')->store('images', 'public');
        }
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        if($gallery->gambar){
            Storage::delete('public/'. $gallery->gambar);
        }
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery berhasil dihapus!');

    }
}
