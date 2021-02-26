<?php

namespace App\Providers;

use App\Models\Car;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('client.layouts.head', function($view){
            if (Auth::user()) {

            $cart = Car::where('user_id',Auth::user()->id)->join('carts','carts.car_id','=','cars.id')->get();
            $view->with('cart',$cart);
        }
        });
    }
    }



