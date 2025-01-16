<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;
class ContactSection extends Controller
{
    public function index()
    {

        $contact = contact::all();


        return view('contact', [

            'contact'=>$contact,

        ]);
    }
}

