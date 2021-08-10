<?php

namespace App\Api\V1\Modules\Auth\Services\Interfaces;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

interface IAuthService
{
    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    public function checkLogin($email, $password);
}
