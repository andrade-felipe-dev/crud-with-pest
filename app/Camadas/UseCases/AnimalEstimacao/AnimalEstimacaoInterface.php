<?php
namespace App\Camadas\UseCases\AnimalEstimacao;

use AnimalEstimacaoRepositoryInterface;

interface AnimalEstimacaoInterface
{
    public function __construct(AnimalEstimacaoRepositoryInterface $animalEstimacaoRepository);

    public function listar(int $idTutor):array;
}