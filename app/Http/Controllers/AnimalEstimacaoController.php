<?php

namespace App\Http\Controllers;

use App\Camadas\UseCases\AnimalEstimacao\AnimalEstimacaoService;
use App\Camadas\Repository\AnimalEstimacaoRepositoryInterface;
use Illuminate\Http\Request;

class AnimalEstimacaoController extends Controller
{
    protected $animalEstimacaoService;

    public function __construct(AnimalEstimacaoService $animalEstimacaoService)
    {
        $this->animalEstimacaoService = $animalEstimacaoService; 
    }


    public function listar(Request $request) 
    {
        $listar = $this->animalEstimacaoService->listar($request->idTutor);
        
        return response($listar);
    }
}
