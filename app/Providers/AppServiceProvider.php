<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Kategori;
use App\Models\Identitas;
use App\Models\ProfilWebsite;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
    }
}
