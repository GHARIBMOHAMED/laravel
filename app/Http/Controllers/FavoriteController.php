<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Car;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $fav= Favorite::where('user_id',Auth::user()->id)->count();
       $won= Bid::where(['user_id'=> Auth::user()->id ,'winningBid'=>'1'])->count();
       $bids= Bid::where(['user_id'=> Auth::user()->id])->count();

       $table= Bid::where('bids.user_id',Auth::user()->id)
       ->join('users','bids.user_id','=','users.id')
       ->join('cars','cars.id','=','bids.car_id')
       ->groupby('car_id')
       ->get(['*', DB::raw('MAX(bidValue)as max'),DB::raw('MIN(bidValue)as min')]);

       return view('client.dashboard.index')->with(['fav'=> $fav , 'bids'=>$bids,'won'=>$won ,'table' =>$table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
