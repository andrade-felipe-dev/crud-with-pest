<?php

namespace App\Layers\Application\AnimalEstimacao;

use App\Exceptions\ClientException;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoOutput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class CadastrarAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $repository)
    {}

    public function execute(AnimalEstimacaoInput $animalInput): AnimalEstimacaoOutput
    {
        try {
            $entity = $this->repository->cadastrar($animalInput);

            return new AnimalEstimacaoOutput($entity);
        } catch (ClientException $e) {
            throw $e;
        }

    }

}
