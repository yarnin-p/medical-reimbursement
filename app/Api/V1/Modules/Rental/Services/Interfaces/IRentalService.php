<?php

namespace App\Api\V1\Modules\Rental\Services\Interfaces;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

interface IRentalService
{
    public function listRental();

    public function importRental($file);
}
