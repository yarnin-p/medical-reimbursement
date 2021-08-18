<?php

namespace App\Providers;

use App\Api\V1\Modules\Auth\Services\Implement\AuthService;
use App\Api\V1\Modules\Auth\Services\Interfaces\IAuthService;
use App\Api\V1\Modules\MedicalReimbursement\Services\Implement\MedicalReimbursementService;
use App\Api\V1\Modules\MedicalReimbursement\Services\Interfaces\IMedicalReimbursementService;
use App\Api\V1\Modules\Rental\Services\Implement\RentalService;
use App\Api\V1\Modules\Rental\Services\Interfaces\IRentalService;
use Illuminate\Support\ServiceProvider;

class UseCaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Rental Service
        $this->app->bind(IRentalService::class, RentalService::class);

        // Authentication Service
        $this->app->bind(IAuthService::class, AuthService::class);

        // Medical Reimbursement Service
        $this->app->bind(IMedicalReimbursementService::class, MedicalReimbursementService::class);
    }
}
