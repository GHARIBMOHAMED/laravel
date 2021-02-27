<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Models\Car;
use App\Models\Bid;
use App\Models\Favorite;
use App\Models\User;
use Spatie\QueryBuilder\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cars= Car::leftjoin('bids','bids.car_id','=','cars.id')
        ->groupBy('cars.id')
        ->select(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids')])->paginate(6);
        //return dd($cars);
        return view('client/product')->with('cars', $cars);
    }

    public static function productComponant()
    {
        $cars= Car::leftjoin('bids','bids.car_id','=','cars.id')
        ->groupBy('cars.id')
        ->select(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids')])->Paginate(6);
        $cars->withPath('product');
        return with(['cars'=>$cars]);
    }

    public function favorite($id)
    {
        $fav = Favorite::where('user_id',auth()->user()->id)->first();
        //dd($fav);
        if (!is_null($fav)) {

            $favorite = new Favorite();
            $carid = $fav->car_id;
            $userid = $fav->user_id;
            $currentuser = auth()->user()->id;

            if ($carid == $id && $userid==$currentuser) {
                return back()->with('info','this car is alredy added to favorite');
            }else
            {
                $favorite->user_id = auth()->user()->id;
                $favorite->car_id = $id;
                $favorite->favorite='true';
                $favorite->liked='true';
                $favorite->won='false';
                $favorite->save();
                return back()->with('message','car added to favorite');
            }
        } else {
                $favorite = new Favorite();
                $favorite->user_id = auth()->user()->id;
                $favorite->car_id = $id;
                $favorite->favorite='true';
                $favorite->liked='true';
                $favorite->won='false';
                $favorite->save();
                return back()->with('message','car added to favorite');

        }


    }


    public function filter()
    {
        $cars = QueryBuilder::for(Car::class)

        ->leftjoin('bids','bids.car_id','=','cars.id')
        ->groupBy('cars.id')->allowedFilters([AllowedFilter::scope('price'),'model'])
        ->select(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids'),DB::raw('count(DISTINCT bids.user_id) as uninque')])->paginate(6);
       // $cars = $this->paginate2($cars);
        return view('client/home/product-componant')->with('cars', $cars);


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
