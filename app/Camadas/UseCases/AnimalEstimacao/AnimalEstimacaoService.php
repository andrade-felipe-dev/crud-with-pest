<?php
namespace App\Camadas\UseCases\AnimalEstimacao;

use App\Camadas\Repository\AnimalEstimacaoRepositoryInterface;

class AnimalEstimacaoService
{
    protected $repository;

    public function __construct(AnimalEstimacaoRepositoryInterface $animalEstimacaoRepositoryInterface)
    {
        $this->repository = $animalEstimacaoRepositoryInterface;
    }

    public function listar(int $idTutor):array
    {
        return $this->repository->listar($idTutor);
    }
}