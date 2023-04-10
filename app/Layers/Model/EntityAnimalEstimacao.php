<?php
namespace App\Layers\Model;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use Illuminate\Support\Facades\Date;

class EntityAnimalEstimacao
{
    private int $id;

    private string $nome;
    private string $dataNascimento;
    private int $idade;
    private string $especie;
    private string $raca;
    private string $sexo;
    private float $peso;

    public function __construct(AnimalEstimacaoInput $data) {
        foreach($data as $key => $value) {
            if(property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return Date
     */
    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    /**
     * @param Date $dataNascimento
     */
    public function setDataNascimento(Date $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * @param int $idade
     */
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @return string
     */
    public function getEspecie(): string
    {
        return $this->especie;
    }

    /**
     * @param string $especie
     */
    public function setEspecie(string $especie): void
    {
        $this->especie = $especie;
    }

    /**
     * @return string
     */
    public function getRaca(): string
    {
        return $this->raca;
    }

    /**
     * @param string $raca
     */
    public function setRaca(string $raca): void
    {
        $this->raca = $raca;
    }

    /**
     * @return string
     */
    public function getSexo(): string
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    /**
     * @return float
     */
    public function getPeso(): float
    {
        return $this->peso;
    }

    /**
     * @param float $peso
     */
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

}
