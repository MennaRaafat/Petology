<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;


    protected $fillable = [
        'food_name',
        'expire_date',
        'price',
        'photo',
        'type',
    ];

    
    public function order(){
        return $this ->belongsToMany(Order::class);
    }

   
    public function cart_f(){
        return $this ->hasOne(Cart::class);
    }

    public function wish_f(){
        return $this ->hasOne(Wish::class);
    }

}
