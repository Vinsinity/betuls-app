<?php

namespace App\Providers;

use App\Models\Cargo;
use App\Models\OrderStatus;
use Illuminate\Support\ServiceProvider;

class AdminViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin/order/*', function ($view) {
            $view->with('order_statuses', OrderStatus::all());
            $view->with('cargos', Cargo::all());
        });
    }
}
