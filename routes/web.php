<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login/entrada');
});

Route::get('/cadastro', function () {
    return view('login/cadastro');
});

Route::get('/tipo', function () {
    return view('login/tipoConta');
});

Route::get('/home', function () {
    return view('home');
});
