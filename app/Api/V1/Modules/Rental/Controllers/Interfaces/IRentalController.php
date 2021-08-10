<?php

namespace App\Api\V1\Modules\Rental\Controllers\Interfaces;

use App\Http\Requests\Rental\ImportRentalPostRequest;
use Illuminate\Http\Request;


interface IRentalController
{
    public function list();

    public function create();

    public function read();

    public function update();

    public function delete();

    public function import(ImportRentalPostRequest $request);
}
