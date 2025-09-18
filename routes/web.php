<?php

use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/', function () {
    return view('ektrakulikuler');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/identitas', function () {
    return view('identitas'); 
});

Route::get('/ektrakulikuler',[EskulController::class,'index']);