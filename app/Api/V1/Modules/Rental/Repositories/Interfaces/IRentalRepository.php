<?php

namespace App\Api\V1\Modules\Rental\Repositories\Interfaces;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

interface IRentalRepository
{
    public function create();

    public function list();
}
