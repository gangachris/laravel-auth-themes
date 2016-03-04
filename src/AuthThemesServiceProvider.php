<?php

namespace Ganga\AuthThemes;

use Illuminate\Support\ServiceProvider;

class AuthThemesServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
    */
    public function boot()
    {
        //Publishes auth theme command file to applications commands folder
        $this->publishes([__DIR__.'/AuthThemeCommand.php' => app_path('Console/Commands/AuthThemeCommand.php')]);
    }

  /**
    * Register the application services.
    *
    * @return void
  */
    public function register()
    {
        //
    }
}
