<?php

namespace App\Api\V1\Modules\MedicalReimbursement\Controllers\Interfaces;

use App\Http\Requests\MedicalReimbursement\CreateMedicalReimbursementRequest;
use App\Http\Requests\Rental\ImportRentalPostRequest;
use Illuminate\Http\Request;


interface IMedicalReimbursementController
{
    public function list();

    public function create(CreateMedicalReimbursementRequest $request);

    public function read();

    public function update();

    public function delete();
}
