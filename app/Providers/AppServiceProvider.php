<?php

namespace Upscale\Providers;

use Illuminate\Database\Eloquent\Factory;
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
        $mainPath = database_path('migrations');
        $moduleMigrationDirectories = glob(base_path('App/Modules') . "/*/Migrations", GLOB_ONLYDIR);
        $paths = array_merge([$mainPath], $moduleMigrationDirectories);
        $this->loadMigrationsFrom($paths);

        $moduleFactoryDirectories = glob(base_path('App/Modules') . "/*/Factories", GLOB_ONLYDIR);
        $this->loadFactoriesFrom($moduleFactoryDirectories);
    }

    protected function loadFactoriesFrom($paths) {
        foreach ($paths as $path) {
            $this->app->make(Factory::class)->load($path);
        }

    }
}
