<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bid;
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
}
