<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
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
        $product = new product;
        $product->tagline = $request->tagline;
        $product->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $product->gambar = $request->file('gambar')->store('images', 'public');
        }
        $product->save();
        return redirect()->route('product.index')->with('success', 'product berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'tagline' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:3048',
        ]);

        $product->tagline = $request->tagline;
        $product->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            if ($product->gambar) {
                Storage::delete('public/' . $product->gambar);
            }
            $product->gambar = $request->file('gambar')->store('images', 'public');
        }
        $product->save();
        return redirect()->route('product.index')->with('success', 'Hero Section berhasil diUpdaate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        if ($product->gambar) {
            Storage::delete('public/' . $product->gambar);
            $product->delete();

            return redirect()->route('product.index')->with('success', 'product berhasil dihapus!');
        }
    }
}
