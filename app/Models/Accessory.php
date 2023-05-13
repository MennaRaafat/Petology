<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    public function order(){
        return $this ->belongsToMany(Order::class);
    }
    public function cart_a(){
        return $this ->hasOne(Cart::class);
    }

    public function wish_a(){
        return $this ->hasOne(Wish::class);
    }

  

    protected $fillable = [
        'acc_name',
        'rate',
        'price',
        'photo',
        'type',
        'description'
    ];
}
