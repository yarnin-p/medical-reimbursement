<?php

namespace App\Api\V1\Modules\Rental\Controllers\Implement;

use App\Api\V1\Modules\Rental\Controllers\Interfaces\IRentalController;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Api\V1\Modules\Rental\Services\Interfaces\IRentalService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Rental\ImportRentalPostRequest;
use Exception;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use TypeError;


class RentalController extends Controller implements IRentalController
{

    private $rentalService;

    /**
     * RentalController constructor.
     * @param IRentalService $IRentalService
     */
    public function __construct(IRentalService $IRentalService)
    {
        $this->rentalService = $IRentalService;
    }


    public function list()
    {
        try {
            $rentals = $this->rentalService->listRental();
        } catch (Exception $e) {
            Log::error('RentalController@listRental@list: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError(500, $e->getMessage(), '');
        }

        return responseSuccess(200, '', $rentals);
    }

    public function create()
    {
        // TODO: Implement create() method.
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

    public function import(ImportRentalPostRequest $request)
    {
        try {
            $input = $request->data();
        } catch (TypeError $e) {
            Log::error('RentalController@makeInputImportRentalRequest@import: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError(500, $e->getMessage(), 'Something went wrong!');
        }

        $file = $input->file;
        try {
            $rentals = $this->rentalService->importRental($file);
            if (is_string($rentals)) {
                return responseError(500, 'Something went wrong!', (object)[]);
            } else if ($rentals) {
                return responseSuccess(201, 'Imported rental data', (object)[]);
            }
            return responseError(500, 'Imported rental data failed!', (object)[]);
        } catch (Exception $e) {
            Log::error('RentalController@importRentalFromExcelFile@import: [' . $e->getCode() . '] ' . $e->getMessage());
            return responseError(500, $e->getMessage(), 'Something went wrong!');
        }
    }
}
