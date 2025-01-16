<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;

class AboutSection extends Controller
{
    public function index()
    {


        $aboutus = aboutus::all();



        return view('about', [

            'aboutus' => $aboutus,


        ]);
    }
}

