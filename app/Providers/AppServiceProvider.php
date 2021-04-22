<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        //MySQL mais antiga do que a versão 5.7.7 ou MariaDB anterior à versão 10.2.2
        //Schema::defaultStringLength(191);

        //Ajusta o Paginador do Laravel
        Paginator::useBootstrap();
    }
}
