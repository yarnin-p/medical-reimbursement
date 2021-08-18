<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Repositories\Implement;

use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Models\Rental;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MedicalReimbursementRepository extends MariaDBRepository
{

    /**
     * RentalRepository constructor.
     * @param Rental $model
     */
    public function __construct(Rental $model)
    {
        parent::__construct($model);
    }
}
