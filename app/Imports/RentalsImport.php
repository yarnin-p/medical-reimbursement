<?php

namespace App\Imports;

use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Events\BeforeImport;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Events\BeforeSheet;

class RentalsImport implements ToModel, WithEvents, WithHeadingRow
{
    use Importable, RegistersEventListeners;

    public int $rows = 0;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        ++$this->rows;

        return new Rental([
            'uuid' => (string)Str::uuid(),
            'user_id' => $row['user_id']
        ]);
    }

    public static function beforeImport(BeforeImport $event)
    {
        Log::info('Starting import rental data');
    }

    public static function afterImport(AfterImport $event)
    {
        Log::info('Imported rental data');
    }

    public static function beforeSheet(BeforeSheet $event)
    {
        //
    }

    public static function afterSheet(AfterSheet $event)
    {
        //
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }
}
