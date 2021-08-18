<?php

namespace App\Http\Requests\MedicalReimbursement;

use App\Api\V1\Modules\MedicalReimbursement\Services\In\CreateMedicalReimbursementRequestModel;
use App\Api\V1\Modules\Rental\Services\In\ImportRentalPostRequestModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;


class CreateMedicalReimbursementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'กรุณากรอกเลขประจำตัวพนักงาน',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'success' => false,
            'code' => 422,
            'message' => 'Validation failed!',
            'error' => $validator->errors()
        ], 422);
        throw (new ValidationException($validator, $response));
    }


    public function makeInputData(): CreateMedicalReimbursementRequestModel
    {
        $medicalReimbursement = new CreateMedicalReimbursementRequestModel();
        $medicalReimbursement->userID = $this->input("user_id");

        return $medicalReimbursement;
    }
}
