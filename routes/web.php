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

Route::get('/relatorios', function () {
    return view('relatorio/relatorios');
});

Route::get('/observacao', function () {
    return view('relatorio/observacao');
});

Route::get('/acelerometro', function () {
    return view('relatorio/acelerometro');
});

Route::get('/configuracoes', function () {
    return view('configuracoes/configuracoes');
});

Route::get('/acessibilidade', function () {
    return view('configuracoes/acessibilidade');
});

Route::get('/duvidas', function () {
    return view('login/duvidas');
});

Route::get('/idiomas', function () {
    return view('configuracoes/idiomas');
});

Route::get('/suporte', function () {
    return view('configuracoes/suporte');
});