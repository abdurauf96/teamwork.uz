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
            $services=\App\Models\Service::all();
            $view->with(compact('menus', 'services'));
        });

        view()->composer('sections.about', function($view){
            $about=\App\Models\About::first();
            $blokabout=\App\Models\BlokAbout::first();
            $numbers=\App\Models\Number::all();
            $view->with(compact('about','blokabout','numbers'));
        });

        view()->composer('sections.success', function($view){
           
            $blokabout=\App\Models\BlokAbout::first();
            $numbers=\App\Models\Number::all();
            $view->with(compact('blokabout','numbers'));
        });

        view()->composer('sections.services', function($view){
            $services=\App\Models\Service::all();
            $blokservice=\App\Models\BlokService::first();
            $view->with(compact('services','blokservice'));
        });

        view()->composer('sections.team', function($view){
            $personals=\App\Models\Personal::all();
            $blokteam=\App\Models\BlokTeam::first();
            $view->with(compact('personals', 'blokteam'));
        });

        view()->composer('sections.partners', function($view){
            $partners=\App\Models\Partner::all();
            $blokpartner=\App\Models\BlokPartner::first();
            $view->with(compact('partners', 'blokpartner'));
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
