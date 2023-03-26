<?php
namespace App\Layers\Model;

use Illuminate\Support\Facades\Date;

class EntityAnimalEstimacao
{
    private int $id;
    private string $nome;
    private Date $dataNascimento;
    private int $idade;
    private string $especie;
    private string $raca;
    private string $sexo;
    private float $peso;
    private int $idTutor;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function getIdTutor()
    {
        return $this->idTutor;
    }

    public function setIdTutor($idTutor)
    {
        $this->idTutor = $idTutor;

        return $this;
    }
}
