<?php

namespace App\Layers\Application\AnimalEstimacao\CadastrarAnimalEstimacao;

use App\Exceptions\ClientException;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoOutput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class CadastrarAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $repository)
    {}

    public function execute(AnimalEstimacaoInput $animalInput): bool
    {
        try {
            return $this->repository->cadastrar($animalInput);
        } catch (ClientException $e) {
            throw $e;
        }

    }

}
