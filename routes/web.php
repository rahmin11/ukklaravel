<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/ektrakulikuler', function () {
    return view('ektrakulikuler');
});

Route::get('/galeri', function () {
    return view('galeri');
});