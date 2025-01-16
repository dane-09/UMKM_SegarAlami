<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = service::all();
        return view('service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar_deskripsi' => 'nullable|image|mimes:jpg,jpeg,png|max:3048', // Disesuaikan menjadi file image
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $service = new service;
        $service->tagline = $request->tagline;
        $service->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $service->gambar = $request->file('gambar')->store('images', 'public');
        }

        if ($request->hasFile('gambar_deskripsi')) {
            $service->gambar_deskripsi = $request->file('gambar_deskripsi')->store('images', 'public');
        }

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(service $service)
    {
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar_deskripsi' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $service->tagline = $request->tagline;
        $service->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            if ($service->gambar) {
                Storage::delete('public/' . $service->gambar);
            }
            $service->gambar = $request->file('gambar')->store('images', 'public');
        }

        if ($request->hasFile('gambar_deskripsi')) {
            if ($service->gambar_deskripsi) {
                Storage::delete('public/' . $service->gambar_deskripsi);
            }
            $service->gambar_deskripsi = $request->file('gambar_deskripsi')->store('images', 'public');
        }

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        if ($service->gambar) {
            Storage::delete('public/' . $service->gambar);
        }

        if ($service->gambar_deskripsi) {
            Storage::delete('public/' . $service->gambar_deskripsi);
        }

        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service berhasil dihapus!');
    }

}
