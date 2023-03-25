<?php
namespace App\Camadas\Repository;

use App\Camadas\Entity\EntityAnimalEstimacao;
use App\Models\AnimalEstimacao;

class AnimalEstimacaoRepository implements AnimalEstimacaoRepositoryInterface
{
    public function listar(int $idTutor): array 
    {
        $animais = AnimalEstimacao::where('id_tutor', $idTutor)->get();
        $animaisEntitys = [];

        foreach ($animais as $animal) {
            $animalEntity = new EntityAnimalEstimacao();
            $animalEntity->id = $animal->id;
            $animalEntity->nome = $animal->nome;
            $animalEntity->dataNascimento = $animal->data_nascimento;
            $animalEntity->idade = $animal->idade;
            $animalEntity->especie = $animal->especie;
            $animalEntity->raca = $animal->especie;
            $animalEntity->sexo = $animal->sexo;
            $animalEntity->peso = $animal->peso;
            $animalEntity->idTutor = $animal->id_tutor;

            array_push($animaisEntitys, $animalEntity);
        }

        return $animaisEntitys;
    }
}