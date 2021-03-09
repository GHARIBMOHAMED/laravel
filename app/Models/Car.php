<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bid;
use Spatie\QueryBuilder\QueryBuilder;
class Car extends Model

{
    protected $fillable = [
        'saleDate',
        'year',
        'location',
        'estValue',
        'saleName',
        'plate',
        'price',
        'damage',
        'fuleType',
        'engineType',
        'model',
        'transmittion',
    ];

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
