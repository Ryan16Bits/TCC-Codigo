<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('entrada');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/home', function () {
    return view('index');
});