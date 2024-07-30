<?php

use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\FaixaController;
use Illuminate\Support\Facades\Route;

Route::get('/faixas', [FaixaController::class, 'index']); // GET - http://127.0.0.1:8000/api/faixas

Route::get('/albums', [AlbumController::class, 'index']); // GET - http://127.0.0.1:8000/api/albums

Route::get('/faixas/{faixa}', [FaixaController::class, 'show']); // GET - http://127.0.0.1:8000/api/faixas/1

Route::get('/albums/{album}', [AlbumController::class, 'show']); // GET - http://127.0.0.1:8000/api/albums/1

Route::post('/faixas', [FaixaController::class, 'store']); // POST - http://127.0.0.1:8000/api/faixas

Route::post('/albums', [AlbumController::class, 'store']); // POST - http://127.0.0.1:8000/api/albums

Route::delete('/faixas/{faixa}', [FaixaController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/faixas/1

Route::delete('/albums/{album}', [AlbumController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/albums/1
