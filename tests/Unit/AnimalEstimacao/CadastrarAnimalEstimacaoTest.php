<?php

use App\Layers\Application\AnimalEstimacao\CadastrarAnimalEstimacao\CadastrarAnimalEstimacao;
use App\Layers\Application\AnimalEstimacao\DTO\AnimalEstimacaoInput;
use App\Layers\Infra\AnimalEstimacaoRepository;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;

test('Ao passar os atributos necessário espero que retorne os dados cadastrados', function () {
    $animalTest = [
        'nome' => 'Gaules',
        'dataNascimento' => '2022-05-01',
        'idade' => 3,
        'especie' => 'cachorro',
        'raca' => 'vira lata',
        'sexo' => 'macho',
        'peso' => 10.2
    ];

    $input = new AnimalEstimacaoInput($animalTest);

    $repositoryMock = Mockery::mock(AnimalEstimacaoRepositoryInterface::class);
    $repositoryMock->shouldReceive('cadastrar')
        ->with($input)
        ->andReturn(true);

    $useCase = new CadastrarAnimalEstimacao($repositoryMock);
    $resposta = $useCase->execute($input);

    expect($resposta)->toBeBool()->toBeTrue();

});
