<?php

namespace App\Layers\Application\AnimalEstimacao;

use App\Exceptions\ClientException;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;
use mysql_xdevapi\Exception;

class ExcluirAnimalEstimacao
{
    public function __construct(private AnimalEstimacaoRepositoryInterface $repository)
    {}

    public function execute(int $id)
    {
        try {
            return $this->repository->excluir($id);
        } catch (Exception $e) {
            return new ClientException('Houve um problema ao excluir o Animal');
        }
    }

}
