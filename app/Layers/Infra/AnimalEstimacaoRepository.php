<?php
namespace App\Layers\Infra;

use App\Layers\Model\AnimalEstimacaoRepositoryInterface;
use App\Layers\Model\EntityAnimalEstimacao;
use App\Models\AnimalEstimacao;
use PhpParser\Node\Expr\Cast\Object_;

class AnimalEstimacaoRepository implements AnimalEstimacaoRepositoryInterface
{
    public function listar(int $idTutor): array 
    {
        $animais = AnimalEstimacao::where('id_tutor', $idTutor)->get();
        $animaisEntitys = [];
        
        foreach ($animais as $animal) {
            $animalEntity = new EntityAnimalEstimacao();
            $animalEntity->setId($animal->id);
            $animalEntity->setNome($animal->nome);
            $animalEntity->setDataNascimento($animal->data_nascimento);
            $animalEntity->setIdade($animal->idade);
            $animalEntity->setEspecie($animal->especie);
            $animalEntity->setRaca($animal->especie);
            $animalEntity->setSexo($animal->sexo);
            $animalEntity->setPeso($animal->peso);
            $animalEntity->setIdTutor($animal->id_tutor);

            array_push($animaisEntitys, $animalEntity);
        }

        return $animaisEntitys;
    }

    public function cadastrar():bool 
    {
        try {
            AnimalEstimacao::create();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}