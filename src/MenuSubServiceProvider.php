<?php

namespace Logicalcrow\Menu;

use Illuminate\Support\ServiceProvider;


class MenuSubServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePublishing();
    }

    protected function configurePublishing()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/create_menus_tables.php' => $this->app->databasePath('migrations/2022_09_01_000000_create_menus_tables.php')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/Models/Menu.php' => app_path('Models/Menu.php'),
            __DIR__.'/Models/MenuSub.php' => app_path('Models/MenuSub.php')
        ], 'models');

        $this->publishes([
            __DIR__.'/Providers/MenuServiceProvider.php' => app_path('Providers/MenuServiceProvider.php')
        ], 'providers');
    }
}
