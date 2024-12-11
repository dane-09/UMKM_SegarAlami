<?php

namespace App\Http\Controllers;

use App\Models\PesanSaran;
use Illuminate\Http\Request;

class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanSaran= PesanSaran::all();
        return view('pesansaran.index',compact('pesanSaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);
        $pesanSaran = new pesanSaran;
        $pesanSaran->nama = $request->nama;
        $pesanSaran->pesan = $request->pesan;

        $pesanSaran->save();


        return redirect()->route('pesan_saran.index')->with('success', 'Pesan saran berhasil dikirim!');

    }

    /**
     * Display the specified resource.
     */
    public function show(PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanSaran $pesanSaran)
    {
        return view('pesansaran.edit',compact('pesanSaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanSaran $pesanSaran)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);
        $pesanSaran->nama = $request->nama;
        $pesanSaran->pesan = $request->pesan;

        $pesanSaran->save();

        return redirect()->route('pesan_saran.index')->with('sucses', 'pesan saran berhasil diupdate');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesanSaran)
    {
        $pesanSaran->delete();
        return redirect()->route('pesan_saran.index')->with('success', 'PesanSaran berhasil dihapus!');

    }
}
