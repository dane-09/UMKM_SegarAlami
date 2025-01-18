<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\banner;
use App\Models\aboutus;
use App\Models\contact;
use App\Models\Gallery;
use App\Models\product;
use App\Models\service;
use App\Models\pesansaran;
=======

use App\Models\Gallery;
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
use App\Models\Herosection;
use Illuminate\Http\Request;

class HomeSection extends Controller
{
    public function index()
    {

        $herosection = Herosection::all();
        $gallery = Gallery::all();
<<<<<<< HEAD
        $aboutus = aboutus::all();
        $service = service::all();
        $product = product::all();
        $pesansaran = Pesansaran::all();
        $banner = banner::all();
        $contact = contact::all();
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        return view('home', [
            'herosection' => $herosection,
            'gallery' => $gallery,
<<<<<<< HEAD
            'aboutus' => $aboutus,
            'banner'=>$banner,
            'pesansaran'=>$pesansaran,
            'service'=>$service,
            'product'=>$product,
            'contact'=>$contact,
=======

>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa

        ]);
    }
}

