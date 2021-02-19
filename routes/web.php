<?php

use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Admin\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use Laravel\Socialite\Facades\Socialite;

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

// Google login
Route::get('login/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);
//-----------------------------------------------------------


//admin
route::middleware(['auth','verified'])->group(function(){
    Route::view('/home', 'welcome');
    Route::resource('edit', UserController::class);
    Route::get('data', 'Admin\UserController@create');
    Route::delete('destroy/{id}', 'Admin\UserController@destroy');
    Route::get('update/{id}', 'Admin\UserController@data');
    Route::post('new/{id}', 'Admin\UserController@update');
    Route::view('add', 'profile.add');
    Route::view('index', 'profile.index');
    Route::post('addcar', 'CarController@store')->name('addcar');

    Route::get('carData', 'CarController@create');
    Route::delete('carDestroy/{id}', 'CarController@destroy');
    Route::get('carUpdate/{id}', 'CarController@show');
    Route::post('newCar/{id}', 'CarController@update');

    Route::get('cardetail/{id}','HomeController@show');
});
//user

route::middleware(['auth'])->group(function(){

    Route::get('/product', 'productController@index');
});
Route::get('/', 'HomeController@index');
Route::view('/about', 'client/about');

Route::view('/contact', 'client/contact');
Route::view('/signin', 'auth/login');
Route::view('/signup', 'auth/register');


Route::get('/bidin/{id}/{price}', 'HomeController@bidin');


// dashboard
Route::view('/dashboard', 'client/dashboard/index');
Route::view('/mybid', 'client/dashboard/mybids');
Route::view('/myfavorite', 'client/dashboard/myfavorite');
Route::view('/notification', 'client/dashboard/notification');
Route::view('/profile', 'client/dashboard/profile');
Route::view('/referal', 'client/dashboard/referal');
Route::view('/wining', 'client/dashboard/wining');


