<?php

namespace App\Api\V1\Modules\Rental\Services\In;
use Illuminate\Http\UploadedFile;

class ImportRentalPostRequestModel
{
    public array|UploadedFile|null $file;
}
