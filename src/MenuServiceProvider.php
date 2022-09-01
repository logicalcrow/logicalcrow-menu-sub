<?php

namespace Logicalcrow\Menu;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
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
        view()->composer(['layouts.app', 'page.panel.dashboard.index'], function() {

            if(auth()->check()) {
                $menuUser = auth()->user()->menus()->where('team_id', auth()->user()->currentTeam->id)->with('menuSubs')->get();
                View::share('menus', $menuUser);
            }
        });
    }
}
