<?php
namespace App\Camadas\Repository;


interface AnimalEstimacaoRepositoryInterface
{
    public function listar(int $idTutor): array;
}