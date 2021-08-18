<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Services\In;

use App\Models\MedicalReimbursement;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CreateMedicalReimbursementRequestModel
{
    public string $userID;

    public function __construct()
    {
    }


    /**
     * @param CreateMedicalReimbursementRequestModel $input
     * @return MedicalReimbursement
     */
    public function toDomain(CreateMedicalReimbursementRequestModel $input)
    {
        $medicalReimbursement = new MedicalReimbursement();
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $medicalReimbursement->uuid = Str::uuid();
        $medicalReimbursement->user_id = $input->userID;
        $medicalReimbursement->created_at = $now;
        $medicalReimbursement->updated_at = $now;

        return $medicalReimbursement;
    }
}
