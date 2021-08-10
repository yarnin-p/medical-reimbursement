<?php

namespace App\Http\Controllers\MedicalReimbursement\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MedicalReimbursementController extends BaseController
{
    public function index()
    {
        return view('medical-reimbursement.index');
    }
}
