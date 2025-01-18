<?php

namespace App\Http\Controllers;


<<<<<<< HEAD
use App\Models\contact;
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
use App\Models\service;
use Illuminate\Http\Request;

class ServiceSection extends Controller
{
    public function index()
    {

        $service = service::all();
<<<<<<< HEAD
        $contact = contact::all();
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa



        return view('service', [

            'service'=>$service,
<<<<<<< HEAD
            'contact'=>$contact,
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        ]);
    }
}

