<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\UserOnline;

class UserOnlineProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $obj_uom = new UserOnline();
            $query_result_person = $obj_uom->runSessionUserOnline();

            return $view->with('query_result_person', $query_result_person);
        });
    }
}
