<?php

namespace App\Layers\Application\AnimalEstimacao\ListarAnimalEstimacao;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoOutput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class ListarAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $repository)
    {
    }

    public function execute(): array
    {
        $entitys = $this->repository->listar();
        foreach ($entitys as $index => $entity) {
            $entitys[$index] = new AnimalEstimacaoOutput($entity);
        }

        return $entitys;
    }
}
