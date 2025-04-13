<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route::get('/', function () {
//     return view('beranda', [
//         'title' => 'Beranda'
//     ]);
// });

Route::get('/', [AppController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [AppController::class, 'tentangKami'])->name('tentangkami');
Route::get('/layanan', [AppController::class, 'layanan'])->name('layanan');
Route::get('/hubungi-kami', [AppController::class, 'hubungiKami'])->name('hubungikami');
Route::get('/detail', [AppController::class, 'detail'])->name('detail');
