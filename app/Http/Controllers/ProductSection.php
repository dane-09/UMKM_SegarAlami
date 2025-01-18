<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\product;
use Illuminate\Http\Request;

class ProductSection extends Controller
{
    public function index()
    {


        $product = product::all();
        $contact = contact::all();



        return view('product', [

            'product' => $product,
            'contact' => $contact,


        ]);
    }
}

