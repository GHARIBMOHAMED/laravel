<?php

use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Admin\UserController;

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


Route::view('/', 'welcome')->middleware(['auth','verified']);

Route::view('add', 'profile.add');
Route::view('index', 'profile.index');

Route::resource('edit', UserController::class);

Route::group(['prefix' => 'admin'], function () {


});
