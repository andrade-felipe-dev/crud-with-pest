<?php
namespace App\Layers\Model;

interface AnimalEstimacaoRepositoryInterface
{
    public function listar(int $idTutor): array;
    public function cadastrar(): bool;
}