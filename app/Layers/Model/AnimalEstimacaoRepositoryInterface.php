<?php
namespace App\Layers\Model;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;

interface AnimalEstimacaoRepositoryInterface
{
    public function cadastrar(AnimalEstimacaoInput $animalEstimacaoInput): bool;
    public function carregar(int $id): EntityAnimalEstimacao;
    public function excluir(int $id): bool;
    public function  listar(): array;
}
