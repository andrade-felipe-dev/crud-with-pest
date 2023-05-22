<?php

test('Funções de debug como avoid, dd, dump, ray e ds não estão sendo utilizadas')
    ->expect(['dump', 'dd', 'ray', 'ds'])
    ->not->toBeUsed();

test('apenas as camadas de repositorio devem interagir com os models')
    ->expect('App\Models')
    ->toOnlyBeUsedIn('App\Layers\Infra');

test('apenas a camada de use case deve interagir com o dto')
    ->expect('App\Layers\Application')
    ->not->toUse('App\Layers\Infra');
