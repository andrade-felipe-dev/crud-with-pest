<?php

namespace App\Http\Controllers;

use App\Exceptions\UseCaseException;
use App\Http\Requests\Animal\CadastrarFormRequest;
use App\Layers\Application\AnimalEstimacao\CadastrarAnimalEstimacao\CadastrarAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\CarregarAnimalEstimacao\CarregarAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Application\AnimalEstimacao\ExcluirAnimalEstimacao\ExcluirAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\ListarAnimalEstimacao\ListarAnimalEstimacao;
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
            $useCase->execute($dto);
            return response()->json('Animal de estimação cadastrado com sucesso.');
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
            $useCase = new CarregarAnimalEstimacao(new AnimalEstimacaoRepository());
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

    public function listar(): JsonResponse
    {
        try {
            $useCase = new ListarAnimalEstimacao(new AnimalEstimacaoRepository());
            $animais = $useCase->execute();

            return response()->json($animais);
        } catch (ClientException $e) {
            return response()->json([
                'erro' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
