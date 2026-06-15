<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController\WebsiteController;
use App\Http\Controllers\AdminController\AdminController;

Route::get('/', [WebsiteController::class, 'login']);
Route::post('/', [WebsiteController::class, 'login'])->name('login.post');
Route::get('/cadastro', [WebsiteController::class, 'cadadstro']);
Route::post('/cadastro', [WebsiteController::class, 'cadastro'])->name('cadastro.post');
Route::get('/tipo', [WebsiteController::class, 'tipo']);
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/relatorios', [WebsiteController::class, 'relatorios']);
Route::get('/observacao', [WebsiteController::class, 'observacao']);
Route::get('/acelerometro', [WebsiteController::class, 'acelerometro']);
Route::get('/configuracoes', [WebsiteController::class, 'configuracoes']);
Route::get('/acessibilidade', [WebsiteController::class, 'acessibilidade']);
Route::get('/duvidas', [WebsiteController::class, 'duvidas']);
Route::get('/suporte', [WebsiteController::class, 'suporte']);
Route::get('/notificacoes', [WebsiteController::class, 'notificacoes']);
Route::get('/sobre', [WebsiteController::class, 'sobre']);
Route::get('/politica', [WebsiteController::class, 'politica']);
Route::get('/sobreConta', [WebsiteController::class, 'sobreConta']);
Route::get('/termos', [WebsiteController::class, 'termos']);
Route::get('/perfil', [WebsiteController::class, 'perfil']);
Route::get('/dados', [WebsiteController::class, 'dados']);
Route::get('/editarDados', [WebsiteController::class, 'editarDados']);
Route::get('/gerenciar', [WebsiteController::class, 'gerenciar']);
Route::get('/trocar', [WebsiteController::class, 'trocar']);
Route::get('/senha', [WebsiteController::class, 'senha']);
Route::get('/conectar', [WebsiteController::class, 'conectar']);
Route::get('/pulseiras', [WebsiteController::class, 'pulseira']);
Route::get('/cuidador', [WebsiteController::class, 'cuidador']);
Route::get('/idoso', [WebsiteController::class, 'idoso']);
Route::get('/esqueciSenha', [WebsiteController::class, 'esqueciSenha']);
Route::get('/esqueciSenha2', [WebsiteController::class, 'esqueciSenha2']);
Route::get('/notificacoesLista', [WebsiteController::class, 'notificacoesLista']);
Route::get('/homeCuidador', [WebsiteController::class, 'homeCuidador']);
