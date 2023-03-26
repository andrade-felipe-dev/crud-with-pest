<?php

namespace App\Http\Controllers;

use App\Layers\Application\ListarAnimalEstimacao;
use Illuminate\Http\Request;

class ListarAnimalEstimacaoController extends Controller
{
    private ListarAnimalEstimacao $listarAnimalEstimacao;

    public function __construct(ListarAnimalEstimacao $listarAnimalEstimacao)
    {
        $this->listarAnimalEstimacao = $listarAnimalEstimacao;
    }


    public function execute(Request $request) 
    {
        $listar = $this->listarAnimalEstimacao->execute($request->idTutor);
        
        return response($listar);
    }
}
