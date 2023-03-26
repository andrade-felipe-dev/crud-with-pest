<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layers\Application\CadastrarAnimalEstimacao;

class CadastrarAnimalEstimacaoController extends Controller
{
    private CadastrarAnimalEstimacao $cadastrarAnimalEstimacao;

    public function __construct(CadastrarAnimalEstimacao $cadastrarAnimalEstimacao)
    {
        $this->cadastrarAnimalEstimacao = $cadastrarAnimalEstimacao;
    }

    public function execute(Request $request) 
    {
        $request->validate([
            'nome' => 'required|string',
            'dataNascimento' => 'required',
            'idade' => 'required|integer',
            'especie' => 'required|string',
            'raca' => 'required|string',
            'peso' => 'required',
            'idTutor' => 'required|integer'
        ]);
        
        dd($request->all());

        $this->cadastrarAnimalEstimacao->execute($request->all());
    }
}
