<?php

namespace App\Http\Controllers;


use App\Models\service;
use Illuminate\Http\Request;

class ServiceSection extends Controller
{
    public function index()
    {

        $service = service::all();



        return view('service', [

            'service'=>$service,


        ]);
    }
}

