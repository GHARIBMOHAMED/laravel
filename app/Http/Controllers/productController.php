<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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
        ->get(['cars.*','bids.user_id', DB::raw('count(bids.id) as bids')])
        ;
        $cars = $this->paginate($cars);

        //return dd($cars);
        return view('client/product')->with('cars', $cars);
    }

    public function paginate($cars, $perPage = 6, $page = null,
    $baseUrl = 'product',
         $options = [])
        {
            $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

            $cars = $cars instanceof Collection ?
                           $cars : Collection::make($cars);

            $lap = new LengthAwarePaginator($cars->forPage($page, $perPage),
                               $cars->count(),
                               $perPage, $page, $options);

            if ($baseUrl) {
                $lap->setPath($baseUrl);
            }

            return $lap;
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
