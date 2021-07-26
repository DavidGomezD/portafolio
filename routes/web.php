<?php

#En este archivo estan las rutas de las paginas

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo_retrofit', function(){
    return view('ejemplo_retrofit');
});
