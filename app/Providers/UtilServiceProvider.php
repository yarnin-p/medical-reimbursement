<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function Composer\Autoload\includeFile;

class UtilServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(base_path('app/Utils/*.php')) as $utilFilename) {
            includeFile($utilFilename);
        }
    }
}
