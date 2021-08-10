<?php

namespace App\Api\V1\Modules\Rental\Services\Implement;

use App\Api\V1\Modules\MariaDB\Repositories\Implement\MariaDBRepository;
use App\Api\V1\Modules\Rental\Repositories\Interfaces\IRentalRepository;
use App\Api\V1\Modules\Rental\Services\Interfaces\IRentalService;
use App\Imports\RentalsImport;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class RentalService extends MariaDBRepository implements IRentalService
{

    /**
     * @var IRentalRepository
     */
    private $rentalRepo;

    /**
     * RentalService constructor.
     * @param Rental $model
     */
    public function __construct(Rental $model)
    {
        parent::__construct($model);
    }

    public function listRental()
    {
        return $this->list();
    }

    public function importRental($file)
    {
        $rentalsImport = new RentalsImport();

        try {
            $filename = 'rental_' . Carbon::now()->format('Ymd_His') . '.xlsx';
            $date = Carbon::now()->format('Y-m-d');
        } catch (Exception $e) {
            return $e->getMessage();
        }

        try {
            Storage::disk('local')->putFileAs('uploads/rental/imports/' . $date, $file, $filename);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        if ($file->isValid()) {
            try {
                Excel::import(
                    $rentalsImport,
                    storage_path() . '/app/uploads/rental/imports/' . $date . '/' . $filename);

                $imported = $rentalsImport->getRowCount();
                if ($imported > 0) {
                    return true;
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        return false;
    }
}
