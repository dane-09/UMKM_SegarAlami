<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\contact;
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
use App\Models\product;
use Illuminate\Http\Request;

class ProductSection extends Controller
{
    public function index()
    {


        $product = product::all();
<<<<<<< HEAD
        $contact = contact::all();
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa



        return view('product', [

            'product' => $product,
<<<<<<< HEAD
            'contact' => $contact,
=======
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa


        ]);
    }
}

