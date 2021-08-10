<?php

namespace App\Api\V1\Modules\Rental\Repositories\Implement;

use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Models\Rental;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RentalRepository extends MariaDBRepository
{

    /**
     * RentalRepository constructor.
     * @param Rental $model
     */
    public function __construct(Rental $model)
    {
        parent::__construct($model);
    }

    public function sss() {
        return $this->list();
    }

}
