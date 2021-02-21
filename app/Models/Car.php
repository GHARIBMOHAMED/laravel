<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bid;
use Spatie\QueryBuilder\QueryBuilder;
class Car extends Model

{
    protected $guarded = [];
protected $casts = [
    'images' => 'array'
];

    use HasFactory;

    function bid(){
        return $this->hasMany(Bid::class);
    }

    public function scopePrice( $query, $price)
{
    return $query->whereRaw('cars.price <='. $price);
}
}
