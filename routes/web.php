<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\WishlistController;
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
	// Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::controller(FrontendController::class)->group(function(){
        
        Route::get('/','index');
        Route::get('viewcategory/{slug}','viewcategory');
        Route::get('category/{cate_slug}/{prod_slug}','viewproduct');

    });
   Route::middleware(['auth'])->group(function(){
       Route::get('add-rating' ,[RatingController::class , 'add'] );
       Route::resource('/wishlist', WishlistController::class);
   });

});


Auth::routes();

