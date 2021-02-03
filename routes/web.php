<?php

use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Admin\UserController;
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

Route::view('/', 'welcome')->middleware(['auth','verified']);


Route::view('add', 'profile.add')->middleware(['auth','verified']);
Route::view('index', 'profile.index')->middleware(['auth','verified']);

Route::resource('edit', UserController::class)->middleware(['auth','verified']);
Route::get('data', 'Admin\UserController@create')->middleware(['auth','verified']);


Route::group(['prefix' => 'admin'], function () {


});

