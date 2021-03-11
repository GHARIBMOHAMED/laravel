<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::paginate(10);
        //dd($cars);
         return view('backend.car')->with('cars',$cars);

        //response()->json($cars);
    }

    public function cardetail($id)
    {
        $car = Car::find($id);
        //dd($cars);
        return view('backend.editcar')->with('car',$car);
    }


    public function store(Request $request)
    {



        if($request->hasfile('image'))
        {
           foreach($request->file('image') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/media/', $name);
               $images_data[] = $name;
           }
        }

            $post = new Car();
            $post->images=$images_data;
            $post->saleDate = $request->Available_date;
            $post->year = $request->Production_year;
            $post->location = $request->state;
            $post->estValue = $request->Estimated_Value;
            $post->saleName = $request->Seller;
            $post->plate = $request->Plate_Number;
            $post->km = $request->Millage;
            $post->price = $request->Price;
            $post->brand = $request->Brand;
            $post->damage = $request->Damage;
            $post->fuleType = $request->Fule_Type;
            $post->vehicleType = $request->Vehicle_Type;
            $post->engineType = $request->Engin_Type;
            $post->model = $request->Model;
            $post->transmittion = $request->Transmittion_Type;
            $post->featured = $request->Featured;


        $post->save();
        return back()->with('message' , 'car added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return response()->json($car);
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
        $data = Car::find($id);

        $data->saleDate = $request->Available_date1;
        $data->year = $request->Production_year1;
        $data->location = $request->state1;
        $data->estValue = $request->Estimated_Value1;
        $data->saleName = $request->Seller1;
        $data->plate = $request->Plate_Number1;
        $data->km = $request->Millage1;
        $data->price = $request->Price1;
        $data->brand = $request->Brand1;
        $data->damage = $request->Damage1;
        $data->fuleType = $request->Fule_Type1;
        $data->vehicleType = $request->Vehicle_Type1;
        $data->engineType = $request->Engin_Type1;
        $data->featured = $request->Featured1;
        $data->model = $request->Model1;
        $data->transmittion = $request->Transmittion_Type1;

        $data->save();

        return back()->with('info','Car info is updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return with('warning' , 'the car is deleted');


    }
}
