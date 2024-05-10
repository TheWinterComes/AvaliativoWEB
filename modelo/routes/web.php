<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('PhotoFolio.index');
});

Route::get('/sobre', function () {
    return view('PhotoFolio.about');
});

Route::get('/galeria', function () {
    return view('PhotoFolio.gallery');
});
