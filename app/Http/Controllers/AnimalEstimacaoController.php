<?php

namespace App\Http\Controllers;

use App\Exceptions\UseCaseException;
use App\Http\Requests\Animal\CadastrarFormRequest;
use App\Layers\Application\AnimalEstimacao\CadastrarAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Application\AnimalEstimacao\ExcluirAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\ListarAnimalEstimacao;
use App\Layers\Infra\AnimalEstimacaoRepository;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\JsonResponse;

class AnimalEstimacaoController extends Controller
{

    /**
     * @param CadastrarFormRequest $request
     * @return JsonResponse
     * @throws \App\Exceptions\ClientException
     */
    public function cadastrar(CadastrarFormRequest $request): JsonResponse
    {
        try {
            $dto = new AnimalEstimacaoInput($request->all());
            $useCase = new CadastrarAnimalEstimacao(new AnimalEstimacaoRepository());
            $animal = $useCase->execute($dto);
            return response()->json($animal);
        } catch (ClientException $e) {
            return response()->json([
                'erro' => $e->getMessage()
            ], $e->getCode());
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function carregar(int $id): JsonResponse
    {
        try {
            $useCase = new ListarAnimalEstimacao(new AnimalEstimacaoRepository());
            $animal = $useCase->execute($id);

            return response()->json($animal);
        } catch (ClientException $e) {
            return response()->json([
                'erro' => $e->getMessage()
            ], $e->getCode());
        }
    }

    public function excluir(int $id): JsonResponse
    {
        try {
            $useCase = new ExcluirAnimalEstimacao(new AnimalEstimacaoRepository());
            $useCase->execute($id);

            return response()->json('Os dados foram excluídos com sucesso!');
        } catch (ClientException $e) {
            return response()->json([
                'erro' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
