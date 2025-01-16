<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductSection extends Controller
{
    public function index()
    {


        $product = product::all();



        return view('product', [

            'product' => $product,


        ]);
    }
}

