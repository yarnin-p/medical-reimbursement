<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Services\Interfaces;

use App\Api\V1\Modules\MedicalReimbursement\Services\In\CreateMedicalReimbursementRequestModel;

interface IMedicalReimbursementService
{
    public function createMedicalReimbursement(CreateMedicalReimbursementRequestModel $input);
}
