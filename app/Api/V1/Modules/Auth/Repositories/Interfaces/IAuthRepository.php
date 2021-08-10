<?php

namespace App\Api\V1\Modules\Auth\Repositories\Interfaces;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

interface IAuthRepository
{
    public function checkLogin($email, $password);
}
