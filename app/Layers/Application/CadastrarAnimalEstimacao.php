<?php
namespace App\Layers\Application;

use App\Layers\Model\AnimalEstimacaoRepositoryInterface;
use App\Layers\Model\EntityAnimalEstimacao;

class CadastrarAnimalEstimacao
{
    private $repository;

    public function __construct(AnimalEstimacaoRepositoryInterface $animalEstimacaoRepositoryInterface)
    {
        $this->repository = $animalEstimacaoRepositoryInterface;
    }

    public function execute(array $animal):bool
    {
        $entity = new EntityAnimalEstimacao();

        $sucess = $this->repository->cadastrar();

        return $sucess;
    }
}