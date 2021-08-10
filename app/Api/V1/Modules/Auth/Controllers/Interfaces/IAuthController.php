<?php

namespace App\Api\V1\Modules\Auth\Controllers\Interfaces;


use App\Http\Requests\Auth\LoginGetRequest;
use Illuminate\Http\Request;


interface IAuthController
{
    public function login(LoginGetRequest $request);
}
