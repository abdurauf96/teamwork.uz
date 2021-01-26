<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.site', function($view){
            $menus=\App\Models\Menu::orderBy('order')->get();
            $view->with(compact('menus'));
        });

        view()->composer('sections.about', function($view){
            $about=\App\Models\About::first();
            $view->with(compact('about'));
        });

        view()->composer('sections.services', function($view){
            $services=\App\Models\Service::all();
            $view->with(compact('services'));
        });

        view()->composer('sections.team', function($view){
            $personals=\App\Models\Personal::all();
            $view->with(compact('personals'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('bread-crumb', Breadcrumb::class);
    }
}
