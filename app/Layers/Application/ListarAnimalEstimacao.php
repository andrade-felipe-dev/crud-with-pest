<?php
namespace App\Layers\Application;

use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class ListarAnimalEstimacao
{
    protected $repository;

    public function __construct(AnimalEstimacaoRepositoryInterface $animalEstimacaoRepositoryInterface)
    {
        $this->repository = $animalEstimacaoRepositoryInterface;
    }

    public function execute(int $idTutor):array
    {
        return $this->repository->listar($idTutor);
    }
}