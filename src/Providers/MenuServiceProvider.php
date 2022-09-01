<?php

namespace Logicalcrow\Menu\Providers;

use Illuminate\Support\Facades\Auth;
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

            if(Auth::check()) {
                $menuUser = Auth::user()->menus()->where('team_id', Auth::user()->currentTeam->id)->with('menuSubs')->get();
                View::share('menus', $menuUser);
            }
        });
    }
}
