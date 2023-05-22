<?php
namespace App\Layers\Application\AnimalEstimacao\CarregarAnimalEstimacao;

use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoOutput;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

class CarregarAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $repository)
    {}

    public function execute(int $idTutor): AnimalEstimacaoOutput
    {
        $entity = $this->repository->carregar($idTutor);
        return new AnimalEstimacaoOutput($entity);
    }
}
