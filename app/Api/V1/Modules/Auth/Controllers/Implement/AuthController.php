<?php

namespace App\Api\V1\Modules\Auth\Controllers\Implement;

use App\Api\V1\Modules\Auth\Controllers\Interfaces\IAuthController;
use App\Api\V1\Modules\Auth\Resources\LoginResource;
use App\Api\V1\Modules\Auth\Services\Interfaces\IAuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Exception;
use TypeError;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller implements IAuthController
{

    private $authService;

    /**
     * AuthController constructor.
     * @param IAuthService $IAuthService
     */
    public function __construct(IAuthService $IAuthService)
    {
        $this->authService = $IAuthService;
    }


    public function login(LoginRequest $request)
    {
        try {
            $input = $request->makeInputData();
        } catch (TypeError $e) {
            Log::error('AuthController@makeInputLogin@checkLogin: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError($e->getMessage());
        }

        try {
            $user = $this->authService->checkLogin($input->email, $input->password);
            if (is_string($user)) {
                return responseError($user);
            } else {
                if ($user) {
                    return responseSuccess(new LoginResource($user));
                }
                return responseNoContent();
            }
        } catch (Exception $e) {
            Log::error('AuthController@checkLoginUser@checkLogin: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError($e->getMessage());
        }
    }
}
