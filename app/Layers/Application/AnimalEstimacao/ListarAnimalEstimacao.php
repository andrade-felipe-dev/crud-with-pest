<?php
namespace App\Layers\Application\AnimalEstimacao;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoOutput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class ListarAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $animalEstimacaoRepositoryInterface)
    {}

    public function execute(int $idTutor): AnimalEstimacaoOutput
    {
        $entity = $this->repository->carregar($idTutor);
        return new AnimalEstimacaoOutput($entity);
    }
}
