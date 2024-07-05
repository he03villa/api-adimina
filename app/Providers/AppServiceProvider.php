<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Dao\RolDao;
use App\Dao\TipoDocumentoDao;
use App\Dao\UsuarioDao;
use App\Models\TipoPropiedad;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RolDao::class);
        $this->app->singleton(UsuarioDao::class);
        $this->app->singleton(TipoDocumentoDao::class);
        $this->app->singleton(TipoPropiedad::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
