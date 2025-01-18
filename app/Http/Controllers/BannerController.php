<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = banner::all(); 
        return view('banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $banner = new banner;
        $banner->tagline = $request->tagline;
        $banner->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $banner->gambar = $request->file('gambar')->store('images', 'public');
        }

        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(banner $banner)
    {
        return view('banner.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banner $banner)
    {
        return view('banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banner $banner)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $banner->tagline = $request->tagline;
        $banner->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            if ($banner->gambar) {
                Storage::delete('public/' . $banner->gambar);
            }
            $banner->gambar = $request->file('gambar')->store('images', 'public');
        }

        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Banner berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banner $banner)
    {
        if ($banner->gambar) {
            Storage::delete('public/' . $banner->gambar);
        }
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner berhasil dihapus!');
    }
}
