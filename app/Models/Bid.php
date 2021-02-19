<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
class Bid extends Model
{
    use HasFactory;
    function car(){
        return $this->belongsTo(Car::class,'car_id','id');
    }
}
