<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\banner;
use App\Models\aboutus;
use App\Models\contact;
=======
use App\Models\aboutus;
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
use Illuminate\Http\Request;

class AboutSection extends Controller
{
    public function index()
    {


        $aboutus = aboutus::all();
<<<<<<< HEAD
        $banner = banner::all();
        $contact = contact::all();
=======

>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        return view('about', [

            'aboutus' => $aboutus,
<<<<<<< HEAD
            'banner'=>$banner,
            'contact'=>$contact,
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        ]);
    }
}

