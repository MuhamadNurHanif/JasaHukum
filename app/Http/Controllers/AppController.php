<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function tentangKami()
    {
        return view('tentangkami');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function hubungiKami()
    {
        return view('hubungikami');
    }

    public function detail(){
        return view('detail');
    }
}
