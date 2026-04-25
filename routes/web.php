<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;

Route::get('/', [AppController::class, 'index'])->name('beranda');
Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');
Route::get('/dashboard/klien', [DashboardController::class, 'klien'])->name('klien.index');

// Blog Routes
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
