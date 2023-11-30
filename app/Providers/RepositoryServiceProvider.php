<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\SpecialtiesRepositoryInterface;
use App\Repository\SpecialtiesRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SpecialtiesRepositoryInterface::class, SpecialtiesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
