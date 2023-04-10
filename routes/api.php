<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/animal-estimacao', [App\Http\Controllers\AnimalEstimacaoController::class, 'cadastrar']);
Route::get('/animal-estimacao/{id}', [App\Http\Controllers\AnimalEstimacaoController::class, 'carregar']);
Route::delete('/animal-estimacao/{id}', [App\Http\Controllers\AnimalEstimacaoController::class, 'excluir']);
