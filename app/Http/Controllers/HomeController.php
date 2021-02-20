<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Bid;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars= Car::leftjoin('bids',function($join){
            $join->on('bids.car_id','=','cars.id');
        })
            ->groupBy('cars.id')->take(3)
            ->get(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids')]);


            $carsfu= Car::leftjoin('bids',function($join){
                $join->on('bids.car_id','=','cars.id');
            })
            ->where('cars.year','>=','2019')
                ->groupBy('cars.id')->take(3)
                ->get(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids')]);

            return view('client/home')->with(['cars'=>$cars , 'carsfu'=>$carsfu]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Car::find($id);
        return view('client/car-detail')->with('details', $details);
    }

    public function bidin($id , $price)
    {
        $car = Car::find($id);
        $car->price = $price+50;
        $bids = new Bid();
        $bids->user_id = auth()->user()->id;
        $bids->car_id = $id;
        $bids->save();
        $car->save();

        return redirect(url()->previous().'#component'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pass)
    {
        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($pass);
        $user->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function onecar()
    {


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
