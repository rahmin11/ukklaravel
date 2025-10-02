<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GaleriController;

// Halaman Utama
Route::get('/', function () {
    return view('index');
});

// Halaman Profil
Route::get('/profil', function () {
    return view('profil');
});

// Halaman Identitas
Route::get('/identitas', function () {
    return view('identitas'); 
});

// Halaman Ekstrakurikuler
Route::get('/ektrakulikuler', [EskulController::class, 'index']);

// Halaman Galeri
Route::get('/galeri', [GaleriController::class, 'index']);
