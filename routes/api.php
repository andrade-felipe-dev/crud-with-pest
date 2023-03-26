<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tutores', [App\Http\Controllers\TutorController::class, '']);

Route::get('/animal-estimacao/{idTutor}', [App\Http\Controllers\ListarAnimalEstimacaoController::class, 'execute']);
Route::post('/animal-estimacao', [App\Http\Controllers\CadastrarAnimalEstimacaoController::class, 'execute'])->middleware('api');
