<?php

namespace App\Layers\Application\AnimalEstimacao\DTO;

use App\Layers\Model\EntityAnimalEstimacao;

class AnimalEstimacaoOutput
{
    public readonly int $id;
    public readonly string $nome;
    public readonly string $dataNascimento;
    public readonly int $idade;
    public readonly string $especie;
    public readonly string $raca;
    public readonly string $sexo;
    public readonly float $peso;

    public function __construct(EntityAnimalEstimacao $animalEstimacao)
    {
        $this->id = $animalEstimacao->getId();
        $this->nome = $animalEstimacao->getNome();
        $this->dataNascimento = $animalEstimacao->getDataNascimento();
        $this->idade = $animalEstimacao->getIdade();
        $this->especie = $animalEstimacao->getEspecie();
        $this->raca = $animalEstimacao->getRaca();
        $this->sexo = $animalEstimacao->getSexo();
        $this->peso = $animalEstimacao->getPeso();
    }
}
