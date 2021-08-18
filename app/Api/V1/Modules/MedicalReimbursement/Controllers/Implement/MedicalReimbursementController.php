<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Controllers\Implement;

use App\Api\V1\Modules\MedicalReimbursement\Controllers\Interfaces\IMedicalReimbursementController;
use App\Api\V1\Modules\MedicalReimbursement\Services\Interfaces\IMedicalReimbursementService;
use App\Api\V1\Modules\Rental\Services\Interfaces\IRentalService;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicalReimbursement\CreateMedicalReimbursementRequest;
use App\Http\Requests\Rental\ImportRentalPostRequest;
use Exception;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use TypeError;


class MedicalReimbursementController extends Controller implements IMedicalReimbursementController
{

    private $medicalReimbursementService;

    /**
     * RentalController constructor.
     * @param IRentalService $IRentalService
     */
    public function __construct(IMedicalReimbursementService $IMedicalReimbursementService)
    {
        $this->medicalReimbursementService = $IMedicalReimbursementService;
    }


    public function list()
    {
//        try {
//            $rentals = $this->medicalReimbursementService->listRental();
//        } catch (Exception $e) {
//            Log::error('RentalController@listRental@list: [' . $e->getCode() . '] ' . $e->getMessage());
//            return responseError(500, $e->getMessage(), '');
//        }
//
//        return responseSuccess(200, '', $rentals);
    }

    public function create(CreateMedicalReimbursementRequest $request)
    {
        try {
            $input = $request->makeInputData();
        } catch (TypeError $e) {
            Log::error('MedicalReimbursementController@makeInputMedicalReimbursement@create: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError($e->getMessage());
        }


        try {
            $medicalReimbursement = $this->medicalReimbursementService->createMedicalReimbursement($input);
            if (!is_string($medicalReimbursement)) {
                if ($medicalReimbursement) {
                    return responseCreate();
                }
            }
            return responseError($medicalReimbursement);
        } catch (Exception $e) {
            Log::error('MedicalReimbursementController@createMedicalReimbursement@create: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError($e->getMessage());
        }
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
