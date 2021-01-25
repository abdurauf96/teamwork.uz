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

Route::get('/locale/{locale}', function ($locale) {
   session(['locale'=>$locale]);
    return back();
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth'])->name('dashboard');

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

});

require __DIR__.'/auth.php';
Route::resource('admin/menus', '\App\Http\Controllers\Admin\MenusController');
Route::resource('admin/about', '\App\Http\Controllers\Admin\AboutController');
Route::resource('admin/services', '\App\Http\Controllers\Admin\ServicesController');
Route::resource('admin/service-types', '\App\Http\Controllers\Admin\ServiceTypesController');
Route::resource('admin/service-technologies', '\App\Http\Controllers\Admin\ServiceTechnologiesController');
Route::post('/admin/service/upload-images', '\App\Http\Controllers\Admin\ServiceTechnologiesController@uploadImages');
Route::resource('admin/portfolio-categories', '\App\Http\Controllers\Admin\PortfolioCategoriesController');
Route::resource('admin/projects', '\App\Http\Controllers\Admin\ProjectsController');