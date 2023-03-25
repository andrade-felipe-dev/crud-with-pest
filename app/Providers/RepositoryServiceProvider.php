<?php

namespace App\Providers;

use App\Camadas\Repository\AnimalEstimacaoRepository;
use App\Camadas\Repository\AnimalEstimacaoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
