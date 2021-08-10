<?php

namespace App\Providers;

use App\Api\V1\Modules\Auth\Controllers\Interfaces\IAuthController;
use App\Api\V1\Modules\Rental\Controllers\Implement\RentalController;
use App\Api\V1\Modules\Rental\Controllers\Interfaces\IRentalController;
use App\Http\Controllers\Auth\Controllers\AuthController;
use Illuminate\Support\ServiceProvider;

class ApiControllerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // API Rental Controller
        $this->app->bind(IRentalController::class, RentalController::class);

        // API Authentication Controller
        $this->app->bind(IAuthController::class, AuthController::class);
    }
}
