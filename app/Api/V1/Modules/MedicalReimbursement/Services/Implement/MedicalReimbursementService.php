<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Services\Implement;

use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\MedicalReimbursement\Services\In\CreateMedicalReimbursementRequestModel;
use App\Api\V1\Modules\MedicalReimbursement\Services\Interfaces\IMedicalReimbursementService;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Models\MedicalReimbursement;
use App\Models\Rental;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class MedicalReimbursementService extends MariaDBRepository implements IMedicalReimbursementService
{

    /**
     * @var IRentalRepository
     */
    private $medicalReimbursementRepo;

    private $medicalReimbursementRequestModel;

    /**
     * RentalService constructor.
     * @param Rental $model
     */
    public function __construct(
        MedicalReimbursement $model,
        CreateMedicalReimbursementRequestModel $medicalReimbursementInput)
    {
        parent::__construct($model);

        $this->medicalReimbursementRequestModel = $medicalReimbursementInput;
    }

    /**
     * @param CreateMedicalReimbursementRequestModel $input
     * @return string
     */
    public function createMedicalReimbursement(CreateMedicalReimbursementRequestModel $input)
    {
        try {
            $medicalReimbursement = $this->medicalReimbursementRequestModel->toDomain($input);
            return $this->create($medicalReimbursement);
        } catch (ModelNotFoundException $e) {
            Log::error('MedicalReimbursementService@create@createMedicalReimbursement: [' . $e->getCode() . '] ' . $e->getMessage());
            return $e->getMessage();
        }
    }
}
