<?php
namespace App\Layers\Infra;

use App\Exceptions\ClientException;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;
use App\Layers\Model\EntityAnimalEstimacao;
use App\Models\AnimalEstimacao;

class AnimalEstimacaoRepository implements AnimalEstimacaoRepositoryInterface
{
    public function cadastrar(AnimalEstimacaoInput $animalEstimacaoInput): bool
    {
        try {
            $entity = new EntityAnimalEstimacao($animalEstimacaoInput);
            $model = new AnimalEstimacao();

            $model->nome = $entity->getNome();
            $model->data_nascimento = $entity->getDataNascimento();
            $model->idade = $entity->getIdade();
            $model->especie = $entity->getEspecie();
            $model->raca = $entity->getRaca();
            $model->sexo = $entity->getSexo();
            $model->peso = $entity->getPeso();

            $isSaved = $model->save();

            return $isSaved;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function carregar(int $id): EntityAnimalEstimacao
    {
        try {
            $animal = AnimalEstimacao::where('id', $id)->first();
            $animalFormated = $animal->toArray();
            unset($animalFormated['id']);

            $entity = new EntityAnimalEstimacao(new AnimalEstimacaoInput($animalFormated));

            return $entity;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function excluir(int $id): bool
    {
        try {
            return AnimalEstimacao::where('id', $id)->delete();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function listar(): array
    {
        try {
            $animais = AnimalEstimacao::all();
            $animaisEntity = [];
            foreach ($animais->all() as $index => $animal) {
                $animaisInput = new AnimalEstimacaoInput($animal->getAttributes());
                $animaisEntity[$index] = new EntityAnimalEstimacao($animaisInput);
            }
            return $animaisEntity;
        } catch (\Exception $e){
            throw $e;
        }
    }
}
