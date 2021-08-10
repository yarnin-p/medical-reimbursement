<?php

namespace App\Api\V1\Modules\Auth\Controllers\Implement;

use App\Api\V1\Modules\Auth\Controllers\Interfaces\IAuthController;
use App\Api\V1\Modules\Auth\Services\Interfaces\IAuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginGetRequest;
use App\Http\Resources\Auth\LoginGetResource;
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


    public function login(LoginGetRequest $request)
    {
        try {
            $input = $request->data();
        } catch (TypeError $e) {
            Log::error('AuthController@makeInputLoginRequest@checkLogin: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError(500, $e->getMessage(), 'Something went wrong!');
        }


        try {
            $user = $this->authService->checkLogin($input->email, $input->password);
            if (is_string($user)) {
                return responseError(500, $user, 'Something went wrong!');
            } else {
                if ($user) {
                    return responseSuccess(200, 'Ok', new LoginGetResource($user));
                }
                return responseSuccess(204, 'Ok', (object)[]);
            }
        } catch (Exception $e) {
            Log::error('AuthController@checkLoginUser@checkLogin: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError(500, $e->getMessage(), '');
        }
    }
}
