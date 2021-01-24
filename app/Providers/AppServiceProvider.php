<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
