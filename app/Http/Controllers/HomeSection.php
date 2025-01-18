<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\aboutus;
use App\Models\contact;
use App\Models\Gallery;
use App\Models\product;
use App\Models\service;
use App\Models\pesansaran;
use App\Models\Herosection;
use Illuminate\Http\Request;

class HomeSection extends Controller
{
    public function index()
    {

        $herosection = Herosection::all();
        $gallery = Gallery::all();
        $aboutus = aboutus::all();
        $service = service::all();
        $product = product::all();
        $pesansaran = Pesansaran::all();
        $banner = banner::all();
        $contact = contact::all();


        return view('home', [
            'herosection' => $herosection,
            'gallery' => $gallery,
            'aboutus' => $aboutus,
            'banner'=>$banner,
            'pesansaran'=>$pesansaran,
            'service'=>$service,
            'product'=>$product,
            'contact'=>$contact,

        ]);
    }
}

