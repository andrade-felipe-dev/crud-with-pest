<?php
namespace App\Layers\Model;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;

interface AnimalEstimacaoRepositoryInterface
{
    public function cadastrar(AnimalEstimacaoInput $animalEstimacaoInput): EntityAnimalEstimacao;
    public function carregar(int $id): EntityAnimalEstimacao;
    public function excluir(int $id): bool;
}
