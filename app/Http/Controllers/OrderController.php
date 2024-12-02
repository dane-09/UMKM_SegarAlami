<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = order::all();
        return view('order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'alamat'=>'required|string|max:255',
            'jumlah'=>'required|integer',
            'deskripsi'=>'required|string|max:255',
        ]);
        $order = new order;
        $order->nama= $request->nama;
        $order->alamat=$request->alamat;
        $order->jumlah=$request->jumlah;
        $order->deskripsi=$request->deskripsi;

        $order->save();
        return redirect()->route('')->with('success', 'Order berhasil!');

    }


    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        return view('order.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'alamat'=>'required|string|max:255',
            'jumlah'=>'required|integer',
            'deskripsi'=>'required|string|max:255',
        ]);
        $order->nama= $request->nama;
        $order->alamat=$request->alamat;
        $order->jumlah=$request->jumlah;
        $order->deskripsi=$request->deskripsi;
        $order->save();
        return redirect()->route('')->with('success', 'Order berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
    $order -> delete();
    return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus!');

    }
}
