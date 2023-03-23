<?php
namespace App\Camadas\UseCases\AnimalEstimacao;


use AnimalEstimacaoRepositoryInterface;

class AnimalEstimacaoService implements AnimalEstimacaoInterface
{
    private $repository;

    public function __construct(AnimalEstimacaoRepositoryInterface $animalEstimacaoRepositoryInterface)
    {
        $this->repository = $animalEstimacaoRepositoryInterface;
    }

    public function listar(int $idTutor):array
    {
        return $this->repository->listar($idTutor);
    }
}