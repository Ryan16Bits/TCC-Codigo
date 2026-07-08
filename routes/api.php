<?php

// ============================================================
// TCC - Rotas da API de Detecção de Queda
// Arquivo: routes/api.php
//
// INSTRUÇÃO: Cole essas rotas no arquivo routes/api.php
// do projeto Laravel de vocês.
// ============================================================

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\SensorController;

// --- Leituras dos sensores ---
Route::post('/leituras', [SensorController::class, 'salvarLeitura']);

// --- Quedas ---
Route::post('/quedas',         [SensorController::class, 'registrarQueda']);
Route::get('/quedas',          [SensorController::class, 'listarQuedas']);
Route::patch('/quedas/{id}',   [SensorController::class, 'atualizarStatus']);

// --- Status da pulseira ---
Route::get('/dispositivos/{id}/status', [SensorController::class, 'statusPulseira']);
Route::post('/batimentos', [SensorController::class, 'salvarBatimento']);