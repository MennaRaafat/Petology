<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'cart_id';

    public function acc_cart(){
        return $this ->hasMany(Accessory::class);
    }

    public function fcart(){
        // return $this ->hasMany(Food::class);
        return $this ->belongsTo(Food::class,'f_id','food_id');
    }

    public function acart(){
        // return $this ->hasMany(Food::class);
        return $this ->belongsTo(Accessory::class,'accs_id','accessories_id');
    }

    public function ucart(){
        // return $this ->hasMany(User::class);
        return $this ->belongsTo(User::class,'u_id','user_id');

    }

protected $fillable = [
        'ordered_qty',
        'f_id',
        'u_id',
        'accs_id',
        'photo'
    ];

}
