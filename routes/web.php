<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Beranda'
    ]);
});

Route::get('/tentangkami', function () {
    return view('tentangkami', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        'title' => 'Layanan Hukum'
    ]);
});

Route::get('/hubungikami', function () {
    return view('hubungikami', [
        'title' => 'Hubungi Kami'
    ]);
});
