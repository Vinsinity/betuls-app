<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SiteSeo;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;

class PublicViewServiceProvider extends ServiceProvider
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
        view()->composer('public/*', function ($view) {
            $view->with('categories', Category::take(5)->get());
            $view->with('seo_settings', SiteSeo::first());
        });
    }
}
