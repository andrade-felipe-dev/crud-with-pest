<?php

namespace App\Providers;

use App\Layers\Infra\AnimalEstimacaoRepository;
use App\Layers\Model\AnimalEstimacaoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AnimalEstimacaoProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AnimalEstimacaoRepositoryInterface::class,
            AnimalEstimacaoRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
