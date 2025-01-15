<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_informasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $informasi = new Informasi;
        $informasi->judul = $request->judul;
        $informasi->isi_informasi = $request->isi_informasi;

        if ($request->hasFile('gambar')) {
            $informasi->gambar = $request->file('gambar')->store('images', 'public');
        }
        $informasi->save();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informasi $informasi)
    {
        $informasi=$informasi;
        return view('informasi.edit',compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_informasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $informasi->judul = $request->judul;
        $informasi->isi_informasi = $request->isi_informasi;

        if ($request->hasFile('gambar')) {
            $informasi->gambar = $request->file('gambar')->store('images', 'public');
        }
        $informasi->save();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informasi $informasi)
    {
        $informasi=$informasi;
        if($informasi->gambar){
            Storage::delete('public/'. $informasi->gambar);  // hapus file gambar  //
        }
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus!');
    }
}
