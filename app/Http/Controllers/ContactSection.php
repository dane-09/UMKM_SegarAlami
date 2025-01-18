<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\pesansaran;
use Illuminate\Http\Request;

class ContactSection extends Controller
{
    public function index()
    {

        $contact = contact::all();
        $pesansaran = Pesansaran::all();



        return view('contact', [

            'contact'=>$contact,
            'pesansaran'=>$pesansaran,

        ]);
    }
}

