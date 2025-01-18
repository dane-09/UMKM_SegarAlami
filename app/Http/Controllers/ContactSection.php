<?php

namespace App\Http\Controllers;
use App\Models\contact;
<<<<<<< HEAD
use App\Models\pesansaran;
use Illuminate\Http\Request;

=======
use Illuminate\Http\Request;
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
class ContactSection extends Controller
{
    public function index()
    {

        $contact = contact::all();
<<<<<<< HEAD
        $pesansaran = Pesansaran::all();

=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        return view('contact', [

            'contact'=>$contact,
<<<<<<< HEAD
            'pesansaran'=>$pesansaran,
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa

        ]);
    }
}

