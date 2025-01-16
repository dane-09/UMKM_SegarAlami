<?php

namespace App\Http\Controllers;

use App\Models\herosection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HerosectionController extends Controller
{

    public function index()
    {
        $herosection = herosection::all();
        return view('herosection.index', compact('herosection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('herosection.create');
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
        $herosection = new herosection;
        $herosection->tagline = $request->tagline;
        $herosection->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $herosection->gambar = $request->file('gambar')->store('images', 'public');
        }
        $herosection->save();
        return redirect()->route('herosection.index')->with('success', 'Hero Section berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(herosection $herosection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(herosection $herosection)
    {
        return view('herosection.edit', compact('herosection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, herosection $herosection)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $herosection->tagline = $request->tagline;
        $herosection->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            if ($herosection->gambar) {
                Storage::delete('public/' . $herosection->gambar);
            }
            $herosection->gambar = $request->file('gambar')->store('images', 'public');
        }
        $herosection->save();
        return redirect()->route('herosection.index')->with('success', 'Hero Section berhasil diUpdaate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(herosection $herosection)
    {
        if ($herosection->gambar) {
            Storage::delete('public/' . $herosection->gambar);
            $herosection->delete();

            return redirect()->route('herosection.index')->with('success', 'herosection berhasil dihapus!');
        }
    }
}
