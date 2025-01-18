<?php

namespace App\Http\Controllers;

use App\Models\Pesansaran;
use Illuminate\Http\Request;

class PesansaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesansaran = Pesansaran::all();
        return view('pesansaran.index', compact('pesansaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesansaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'pesan'   => 'required|string',
        ]);

        $pesansaran = new Pesansaran;
        $pesansaran->nama = $request->nama;
        $pesansaran->subject = $request->subject;
        $pesansaran->pesan = $request->pesan;
        $pesansaran->save();

        return redirect('/contacts')->with('success', 'Pesan Saran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesansaran $pesansaran)
    {
        return view('pesansaran.show', compact('pesansaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesansaran $pesansaran)
    {
        return view('pesansaran.edit', compact('pesansaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesansaran $pesansaran)
    {
        $request->validate([
            'nama'    => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'pesan'   => 'required|string',
        ]);

        $pesansaran->nama = $request->nama;
        $pesansaran->subject = $request->subject;
        $pesansaran->pesan = $request->pesan;
        $pesansaran->save();

        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesansaran $pesansaran)
    {
        $pesansaran->delete();
        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil dihapus!');
    }
}
