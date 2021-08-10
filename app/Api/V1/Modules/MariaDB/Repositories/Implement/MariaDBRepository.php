<?php

namespace App\Api\V1\Modules\MariaDB\Repositories\Implement;

use App\Api\V1\Modules\MariaDB\Repositories\Interfaces\IMariaDBRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MariaDBRepository implements IMariaDBRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function create()
    {
        return $this->model::create();
    }

    public function read($id, $filters = [])
    {
        return $this->model::where(function ($q) use ($id, $filters) {
            if ($id) {
                $q->where('id', $id);
            }

            if ($filters) {
                foreach ($filters as $filter) {
                    if ($filter['operation'] === 'eq') {
                        $q->where($filter['field'], '=', $filter['value']);
                    } else if ($filter['operation'] === 'gt') {
                        $q->where($filter['field'], '=', $filter['value']);
                    } else if ($filter['operation'] === 'gte') {
                        $q->where($filter['field'], '=', $filter['value']);
                    } else if ($filter['operation'] === 'lt') {
                        $q->where($filter['field'], '=', $filter['value']);
                    } else if ($filter['operation'] === 'lte') {
                        $q->where($filter['field'], '=', $filter['value']);
                    } else if ($filter['operation'] === 'btw') {
                        if ($filter['type'] === 'date') {
                            $q->whereBetween('age', 'DATE(' . [$filter['valueFrom'] . ')', 'DATE(' . $filter['valueTo'] . ')']);
                        } else {
                            $q->whereBetween('age', [$filter['valueFrom'], $filter['valueTo']]);;
                        }
                    }
                }
            }
        })->get();
    }

    public function list()
    {
        return $this->model::all();
    }

    public function update()
    {
        return $this->model::update();
    }

    public function delete()
    {
        return $this->model::delete();
    }
}
