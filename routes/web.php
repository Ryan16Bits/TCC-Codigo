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

Route::get('/notificacoes', function () {
    return view('configuracoes/notificacoes');
});

Route::get('/sobre', function () {
    return view('configuracoes/sobre/sobre');
});

Route::get('/politica', function () {
    return view('configuracoes/sobre/politicaPrivacidade');
});

Route::get('/sobreConta', function () {
    return view('configuracoes/sobre/sobreConta');
});

Route::get('/termos', function () {
    return view('configuracoes/sobre/termosUso');
});

Route::get('/ajuda', function () {
    return view('ajuda/ajudas');
});

Route::get('/perfil', function () {
    return view('perfil/perfil');
});

Route::get('/dados', function () {
    return view('perfil/dados');
});

Route::get('/gerenciar', function () {
    return view('perfil/gerenciar');
});

Route::get('/trocar', function () {
    return view('perfil/trocar');
});

Route::get('/senha', function () {
    return view('perfil/senha');
});

Route::get('/conectar', function () {
    return view('pulseira/conectar');
});

Route::get('/pulseiras', function () {
    return view('pulseira/pulseira');
});

Route::get('/cuidador', function () {
    return view('cadastrar/cuidador');
});

Route::get('/idoso', function () {
    return view('cadastrar/idoso');
});

Route::get('/esqueciSenha', function () {
    return view('login/esqueciSenha');
});

Route::get('/esqueciSenha2', function () {
    return view('login/esqueciSenha2');
});

Route::get('/notificacoesLista', function () {
    return view('notificacoes');
});

Route::get('/homeCuidador', function () {
    return view('homeCuidador');
});
