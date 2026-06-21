<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController\WebsiteController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\RelatorioController;

Route::get('/', [WebsiteController::class, 'login'])->name('login');
Route::post('/', [WebsiteController::class, 'logar'])->name('login.post');
Route::get('/cadastro', [WebsiteController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [WebsiteController::class, 'cadastrar'])->name('cadastro.post');
Route::get('/tipo', [WebsiteController::class, 'tipo'])->name('tipo');
Route::get('/home', [WebsiteController::class, 'home'])->name('home');
Route::get('/relatorios', [WebsiteController::class, 'relatorios'])->name('relatorios');
Route::get('/observacao', [WebsiteController::class, 'observacao'])->name('observacao');
Route::get('/acelerometro', [WebsiteController::class, 'acelerometro'])->name('acelerometro');
Route::get('/configuracoes', [WebsiteController::class, 'configuracoes'])->name('configuracoes');
Route::get('/acessibilidade', [WebsiteController::class, 'acessibilidade'])->name('acessibilidade');
Route::get('/duvidas', [WebsiteController::class, 'duvidas'])->name('duvidas');
Route::get('/suporte', [WebsiteController::class, 'suporte'])->name('suporte');
Route::get('/notificacoes', [WebsiteController::class, 'notificacoes'])->name('notificacoes');
Route::get('/sobre', [WebsiteController::class, 'sobre'])->name('sobre');
Route::get('/politica', [WebsiteController::class, 'politica'])->name('politica');
Route::get('/sobreConta', [WebsiteController::class, 'sobreConta'])->name('sobreConta');
Route::get('/termos', [WebsiteController::class, 'termos'])->name('termos');
Route::get('/perfil', [WebsiteController::class, 'perfil'])->name('perfil');
Route::get('/dados', [WebsiteController::class, 'dados'])->name('dados');
Route::get('/editarDados', [WebsiteController::class, 'editarDados'])->name('editarDados');
Route::get('/gerenciar', [WebsiteController::class, 'gerenciar'])->name('gerenciar');
Route::get('/trocar', [WebsiteController::class, 'trocar'])->name('trocar');
Route::get('/senha', [WebsiteController::class, 'senha'])->name('senha');
Route::get('/conectar', [WebsiteController::class, 'conectar'])->name('conectar');
Route::get('/pulseiras', [WebsiteController::class, 'pulseira'])->name('pulseira');
Route::get('/cuidador', [WebsiteController::class, 'cuidador'])->name('cuidador');
Route::post('/cuidador', [WebsiteController::class, 'cadastrarCuidador'])->name('cuidador.post');
Route::get('/idoso', [WebsiteController::class, 'idoso'])->name('idoso');
Route::post('/idoso', [WebsiteController::class, 'cadastrarIdoso'])->name('idoso.post');
Route::get('/esqueciSenha', [WebsiteController::class, 'esqueciSenha'])->name('esqueciSenha');
Route::get('/esqueciSenha2', [WebsiteController::class, 'esqueciSenha2'])->name('esqueciSenha2');
Route::get('/notificacoesLista', [WebsiteController::class, 'notificacoesLista'])->name('notificacoesLista');
Route::get('/homeCuidador', [WebsiteController::class, 'homeCuidador'])->name('homeCuidador');
Route::get('/convite', [WebsiteController::class, 'convite'])->name('convite');

Route::get('/relatorio', [RelatorioController::class, 'index'])->name('relatorio');
