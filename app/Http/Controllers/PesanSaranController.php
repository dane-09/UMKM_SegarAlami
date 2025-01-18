<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Pesansaran;
use Illuminate\Http\Request;

class PesansaranController extends Controller
=======
use App\Models\PesanSaran;
use Illuminate\Http\Request;

class PesanSaranController extends Controller
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $pesansaran = Pesansaran::all();
        return view('pesansaran.index', compact('pesansaran'));
=======
        $pesanSaran= PesanSaran::all();
        return view('pesansaran.index',compact('pesanSaran'));
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('pesansaran.create');
=======

>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
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
=======
            'nama'  => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);
        $pesanSaran = new pesanSaran;
        $pesanSaran->nama = $request->nama;
        $pesanSaran->pesan = $request->pesan;

        $pesanSaran->save();


        return redirect()->route('pesan_saran.index')->with('success', 'Pesan saran berhasil dikirim!');

>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Pesansaran $pesansaran)
    {
        return view('pesansaran.show', compact('pesansaran'));
=======
    public function show(PesanSaran $pesanSaran)
    {
        //
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Pesansaran $pesansaran)
    {
        return view('pesansaran.edit', compact('pesansaran'));
=======
    public function edit(PesanSaran $pesanSaran)
    {
        return view('pesansaran.edit',compact('pesanSaran'));
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
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
=======
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



>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Pesansaran $pesansaran)
    {
        $pesansaran->delete();
        return redirect()->route('pesansaran.index')->with('success', 'Pesan Saran berhasil dihapus!');
=======
    public function destroy(PesanSaran $pesanSaran)
    {
        $pesanSaran->delete();
        return redirect()->route('pesan_saran.index')->with('success', 'PesanSaran berhasil dihapus!');

>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    }
}
