<?php

namespace App\Providers;

use App\Api\V1\Modules\Auth\Repositories\Implement\AuthRepository;
use App\Api\V1\Modules\Auth\Repositories\Interfaces\IAuthRepository;
use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\MariaDB\Repositories\Interfaces\IMariaDBRepository;
use App\Api\V1\Modules\Rental\Repositories\Implement\RentalRepository;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // MariaDB Repository (Base)
        $this->app->bind(IMariaDBRepository::class, MariaDBRepository::class);

        // Authentication Repository
        $this->app->bind(IAuthRepository::class, AuthRepository::class);

        // Rental Repository
        $this->app->bind(IRentalRepository::class, RentalRepository::class);
    }
}
