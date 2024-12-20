<?php

namespace App\Http\Controllers;

use App\Models\tentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentangKami = tentangKami::all();
        return view('tentangKami.index', compact('tentangKami'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tentangKami.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:2048',
        ]);
        $tentangKami = new tentangKami;
        $tentangKami->judul = $request->judul;
        $tentangKami->deskripsi = $request->deskripsi;
        $tentangKami->gambar = $request->gambar;

        if ($request->hasFile('gambar')) {
            $tentangKami->gambar = $request->file('gambar')->store('images', 'public');
        }
        $tentangKami->save();

        return redirect()->route('tentangKami.index')->with('success', 'About Us berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(tentangKami $tentangKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tentangKami $tentangKami)
    {
        $tentangKami=$tentangKami;
        return view('tentangKami.edit',compact('tentangKami'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tentangKami $tentangKami)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif,jfif|max:2048',
        ]);
        $tentangKami->judul = $request->judul;
        $tentangKami->deskripsi = $request->deskripsi;
        $tentangKami->gambar = $request->gambar;

        if ($request->hasFile('gambar')) {
            if($tentangKami->gambar){
                Storage::delete('public/'. $tentangKami->gambar);  // hapus file gambar lama  //
            }
            $tentangKami->gambar = $request->file('gambar')->store('images', 'public');
        }
        $tentangKami->save();

        return redirect()->route('tentangKami.index')->with('success', 'About berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tentangKami $tentangKami)
    {
        $tentangKami=$tentangKami;
        if($tentangKami->gambar){
            Storage::delete('public/'. $tentangKami->gambar);  // hapus file gambar  //
        }
        $tentangKami->delete();

        return redirect()->route('tentangKami.index')->with('error', 'About Us berhasil dihapus!');
    }
}
