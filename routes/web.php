<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'main'])->name('main');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [SiteController::class, 'viewPortfolio'])->name('viewPortfolio');
Route::get('/reviews', [SiteController::class, 'reviews'])->name('reviews');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/service/{slug}', [SiteController::class, 'viewService'])->name('viewService');
Route::get('/feature/{slug}', [SiteController::class, 'viewFeature'])->name('viewFeature');

Route::get('/locale/{locale}', function ($locale) {
   session(['locale'=>$locale]);
    return back();
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
            $reviews=count(\App\Models\Review::all());
            $services=count(\App\Models\Service::all());
            $messages=count(\App\Models\Message::all());
            $projects=count(\App\Models\Project::all());
        return view('admin.dashboard', compact('reviews', 'services', 'messages', 'projects'));
    })->name('dashboard');

    Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@index');
    Route::resource('admin/roles', 'App\Http\Controllers\Admin\RolesController');
    Route::resource('admin/permissions', 'App\Http\Controllers\Admin\PermissionsController');
    Route::resource('admin/users', 'App\Http\Controllers\Admin\UsersController');
    Route::resource('admin/pages', 'App\Http\Controllers\Admin\PagesController');
    Route::resource('admin/activitylogs', 'App\Http\Controllers\Admin\ActivityLogsController')->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('admin/settings', 'App\Http\Controllers\Admin\SettingsController');
    Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
    Route::resource('admin/menus', '\App\Http\Controllers\Admin\MenusController');
    Route::resource('admin/about', '\App\Http\Controllers\Admin\AboutController');
    Route::resource('admin/services', '\App\Http\Controllers\Admin\ServicesController');
    Route::resource('admin/service-types', '\App\Http\Controllers\Admin\ServiceTypesController');
    Route::resource('admin/service-technologies', '\App\Http\Controllers\Admin\ServiceTechnologiesController');
    Route::post('/admin/service/upload-images', '\App\Http\Controllers\Admin\ServiceTechnologiesController@uploadImages');
    Route::resource('admin/portfolio-categories', '\App\Http\Controllers\Admin\PortfolioCategoriesController');
    Route::resource('admin/projects', '\App\Http\Controllers\Admin\ProjectsController');
    Route::resource('admin/personals', '\App\Http\Controllers\Admin\PersonalsController');
    Route::resource('admin/proccesses', '\App\Http\Controllers\Admin\ProccessesController');
    Route::resource('admin/features', '\App\Http\Controllers\Admin\FeaturesController');
    Route::resource('admin/reviews', '\App\Http\Controllers\Admin\ReviewsController');
    Route::resource('admin/partners', '\App\Http\Controllers\Admin\PartnersController');
    Route::resource('admin/service-projects', '\App\Http\Controllers\Admin\ServiceProjectsController');
    Route::resource('admin/messages', '\App\Http\Controllers\Admin\MessagesController');
    Route::resource('admin/blok-service', '\App\Http\Controllers\Admin\BlokServiceController');
    Route::resource('admin/blok-feature', '\App\Http\Controllers\Admin\BlokFeatureController');
    Route::resource('admin/blok-about', '\App\Http\Controllers\Admin\BlokAboutController');
    Route::resource('admin/numbers', '\App\Http\Controllers\Admin\NumbersController');
    Route::resource('admin/blok-procces', '\App\Http\Controllers\Admin\BlokProccesController');
    Route::resource('admin/blok-partner', '\App\Http\Controllers\Admin\BlokPartnerController');
    Route::resource('admin/blok-review', '\App\Http\Controllers\Admin\BlokReviewController');
    Route::resource('admin/blok-team', '\App\Http\Controllers\Admin\BlokTeamController');
    Route::resource('admin/blok-portfolio', '\App\Http\Controllers\Admin\BlokPortfolioController');

});

require __DIR__.'/auth.php';
