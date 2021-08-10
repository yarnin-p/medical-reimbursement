<?php

namespace App\Api\V1\Modules\Auth\Services\Implement;

use App\Api\V1\Modules\Auth\Repositories\Interfaces\IAuthRepository;
use App\Api\V1\Modules\Auth\Services\Interfaces\IAuthService;
use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Models\Rental;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Log;

class AuthService extends MariaDBRepository implements IAuthService
{

    private $authRepo;

    /**
     * AuthService constructor.
     * @param User $model
     */
    public function __construct(User $model, IAuthRepository $authRepo)
    {
        parent::__construct($model);

        $this->authRepo = $authRepo;
    }

    /**
     * @param $email
     * @param $password
     * @return mixed|string
     */
    public function checkLogin($email, $password)
    {
        try {
            return $this->authRepo->checkLogin($email, $password);
        } catch (ModelNotFoundException $e) {
//            abort(422, 'Invalid email: administrator not found');
            Log::error('AuthService@checkUserLogin@checkLogin: [' . $e->getCode() . '] ' . $e->getMessage());
            return $e->getMessage();
        }
    }
}
