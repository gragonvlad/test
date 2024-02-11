<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
/* new code line*/
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\Log;
/* end new code line*/

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //create new line
DB::whenQueryingForLongerThan(500, function (Connection $connection) {
            Log::info("Database queries exceeded 5 seconds on {$connection->getName()}");
        });
            //end create
    }
}
