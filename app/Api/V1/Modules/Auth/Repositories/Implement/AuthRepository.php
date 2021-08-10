<?php

namespace App\Api\V1\Modules\Auth\Repositories\Implement;

use App\Api\V1\Modules\Auth\Repositories\Interfaces\IAuthRepository;
use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthRepository extends MariaDBRepository implements IAuthRepository
{
    private $userModel;

    /**
     * AuthRepository constructor.
     * @param User $model
     */
    public function __construct(User $userModel)
    {
        parent::__construct($userModel);
        $this->userModel = $userModel;
    }

    public function checkLogin($email, $password)
    {
        try {
            return $this->userModel::where('email', $email)->where('password', $password)->first();
        } catch (ModelNotFoundException | Exception $e) {
            return $e->getMessage();
        }
    }
}
