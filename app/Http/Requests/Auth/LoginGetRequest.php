<?php

namespace App\Http\Requests\Auth;

use App\Api\V1\Modules\Auth\Services\In\LoginGetRequestModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;


class LoginGetRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'กรุณากรอกอีเมล',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
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


    public function data(): LoginGetRequestModel
    {
        $model = new LoginGetRequestModel();
        $model->email = $this->input('email');
        $model->password = $this->input('password');

        return $model;
    }
}
