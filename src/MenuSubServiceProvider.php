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
            __DIR__.'/../database/migrations/create_menus_tables.php' => $this->app->databasePath('migrations/2022_09_01_000001_create_menus_tables.php'),
            __DIR__.'/../database/migrations/create_menus_tables.php' => $this->app->databasePath('migrations/2022_09_01_000002_create_menu_subs_tables.php'),
            __DIR__.'/../database/migrations/create_menus_tables.php' => $this->app->databasePath('migrations/2022_09_01_000003_create_menu_users_tables.php'),
        ], 'Logicalcrow-Migrations');
    }
}
