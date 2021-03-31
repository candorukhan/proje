<?php

namespace App\Http\Controllers;

use App\Models\Sinif;

class OgrenciDerslerController extends Controller
{
    public function index()
    {
        $siniflar = [];
        //$siniflar=sinif::all();
        //dd(sinif::all());
        return view('index');
    }
}
