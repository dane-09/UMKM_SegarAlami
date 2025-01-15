<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_news' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $news = new News;
        $news->judul = $request->judul;
        $news->isi_news = $request->isi_news;
        $news->gambar = $request->gambar;

        if ($request->hasFile('gambar')) {
            $news->gambar = $request->file('gambar')->store('images', 'public');
        }
        $news->save();

        return redirect()->route('news.index')->with('success', 'News berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $news=$news;
        return view('news.edit',compact('news'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_news' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $news->judul = $request->judul;
        $news->isi_news = $request->isi_news;

        if ($request->hasFile('gambar')) {
            if($news->gambar){
                Storage::delete('public/'. $news->gambar);  // hapus file gambar lama  //
            }
            $news->gambar = $request->file('gambar')->store('images', 'public');
        }
        $news->save();

        return redirect()->route('news.index')->with('success', 'News berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news=$news;
        if($news->gambar){
            Storage::delete('public/'. $news->gambar);  // hapus file gambar  //
        }
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News berhasil dihapus!');

    }
}
