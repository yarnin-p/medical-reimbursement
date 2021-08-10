<?php

namespace App\Http\Requests\Rental;

use App\Api\V1\Modules\Auth\Services\In\LoginGetRequestModel;
use App\Api\V1\Modules\Rental\Services\In\ImportRentalPostRequestModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;


class ImportRentalPostRequest extends FormRequest
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
            'file' => 'required|mimes:xls,xlsx',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'กรุณาเลือกไฟล์ Excel',
            'file.mimes' => 'ประเภทของไฟล์ไม่ถูกต้อง',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'success' => false,
            'code' => 422,
            'message' => 'Validation failed!',
            'error' => $validator->errors()
        ])->setStatusCode(422);
        throw (new ValidationException($validator, $response));
    }


    public function data(): ImportRentalPostRequestModel
    {
        $model = new ImportRentalPostRequestModel();
        $model->file = $this->file('file');

        return $model;
    }
}
