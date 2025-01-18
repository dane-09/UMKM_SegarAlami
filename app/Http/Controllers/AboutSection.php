<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\aboutus;
use App\Models\contact;
use Illuminate\Http\Request;

class AboutSection extends Controller
{
    public function index()
    {


        $aboutus = aboutus::all();
        $banner = banner::all();
        $contact = contact::all();


        return view('about', [

            'aboutus' => $aboutus,
            'banner'=>$banner,
            'contact'=>$contact,


        ]);
    }
}

