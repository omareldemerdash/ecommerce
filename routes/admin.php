<?php


use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], 
function(){
	Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class ,'index'] )->name('admin.dashboard');
        Route::resource('/users', UsersController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/products', ProductController::class);

});
});
