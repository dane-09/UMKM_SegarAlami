<?php

namespace App\Http\Controllers;


use App\Models\Gallery;
use App\Models\Herosection;
use Illuminate\Http\Request;

class HomeSection extends Controller
{
    public function index()
    {

        $herosection = Herosection::all();
        $gallery = Gallery::all();


        return view('home', [
            'herosection' => $herosection,
            'gallery' => $gallery,


        ]);
    }
}

