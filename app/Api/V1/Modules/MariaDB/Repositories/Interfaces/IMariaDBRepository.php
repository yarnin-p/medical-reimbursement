<?php

namespace App\Api\V1\Modules\MariaDB\Repositories\Interfaces;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

interface IMariaDBRepository
{
    public function create($data);

    public function read($id, $filters = []);

    public function list();

    public function update();

    public function delete();
}
