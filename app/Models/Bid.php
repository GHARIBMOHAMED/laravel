<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\User;
class Bid extends Model
{
    protected $fillable = [
        'bidValue',
        'user_id',
        'car_id',
        'winningBid',
        'bid',
    ];

    use HasFactory;
    function car(){
        return $this->belongsTo(Car::class,'car_id','id');
    }

    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
