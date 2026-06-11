<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;

Route::get('/', [WebsiteController::class, 'login/entrada']);
Route::get('/cadastro', [WebsiteController::class, 'login/cadadstro']);
Route::get('/tipo', [WebsiteController::class, 'login/tipoConta']);
Route::get('/home', [WebsiteController::class, 'home']);
Route::get('/relatorios', [WebsiteController::class, 'relatorio/relatorios']);
Route::get('/observacao', [WebsiteController::class, 'relatorio/observacao']);
Route::get('/acelerometro', [WebsiteController::class, 'relatorio/acelerometro']);
Route::get('/configuracoes', [WebsiteController::class, 'configuracoes/configuracoes']);
Route::get('/acessibilidade', [WebsiteController::class, 'configuracoes/acessibilidade']);
Route::get('/duvidas', [WebsiteController::class, 'login/duvidas']);
Route::get('/suporte', [WebsiteController::class, 'configuracoes/suporte']);
Route::get('/notificacoes', [WebsiteController::class, 'configuracoes/notificacoes']);
Route::get('/sobre', [WebsiteController::class, 'configuracoes/sobre/sobre']);
Route::get('/politica', [WebsiteController::class, 'configuracoes/sobre/politicaPrivacidade']);
Route::get('/sobreConta', [WebsiteController::class, 'configuracoes/sobre/sobreConta']);
Route::get('/termos', [WebsiteController::class, 'configuracoes/sobre/termosUso']);
Route::get('/perfil', [WebsiteController::class, 'perfil/perfil']);
Route::get('/dados', [WebsiteController::class, 'perfil/dados']);
Route::get('/editarDados', [WebsiteController::class, 'perfil/editarDados']);
Route::get('/gerenciar', [WebsiteController::class, 'perfil/gerenciar']);
Route::get('/trocar', [WebsiteController::class, 'perfil/trocar']);
Route::get('/senha', [WebsiteController::class, 'perfil/senha']);
Route::get('/conectar', [WebsiteController::class, 'perfil/conectar']);
Route::get('/pulseiras', [WebsiteController::class, 'perfil/pulseira']);
Route::get('/cuidador', [WebsiteController::class, 'cadastrar/cuidador']);
Route::get('/idoso', [WebsiteController::class, 'cadastrar/idoso']);
Route::get('/esqueciSenha', [WebsiteController::class, 'login/esqueciSenha']);
Route::get('/esqueciSenha2', [WebsiteController::class, 'login/esqueciSenha2']);
Route::get('/notificacoesLista', [WebsiteController::class, 'notificacoes']);
Route::get('/homeCuidador', [WebsiteController::class, 'homeCuidador']);
