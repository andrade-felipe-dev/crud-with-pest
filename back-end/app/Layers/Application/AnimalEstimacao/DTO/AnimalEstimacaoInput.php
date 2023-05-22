<?php

namespace App\Layers\Application\AnimalEstimacao\DTO;

class AnimalEstimacaoInput
{
    private ?int $id;
    public readonly string $nome;
    public readonly string $dataNascimento;
    public readonly int $idade;
    public readonly string $especie;
    public readonly string $raca;
    public readonly string $sexo;
    public readonly float $peso;

    public function __construct(array $data) {
        $this->nome = $data['nome'];
        $this->dataNascimento = $data['dataNascimento'];
        $this->idade = $data['idade'];
        $this->especie = $data['especie'];
        $this->raca = $data['raca'];
        $this->sexo = $data['sexo'];
        $this->peso = $data['peso'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
