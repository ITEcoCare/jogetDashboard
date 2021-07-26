<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // View::share('raka', 'ini isi var raka dari asp.php');
        // Controller::share('dataTablez', DB::select("SELECT * FROM app_fd_pengirimancabang_pd WHERE c_status!='Completed' AND c_status!='Approved'"));

    }
}
