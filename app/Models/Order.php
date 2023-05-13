<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function admin(){
        return $this ->belongsTo(Admin::class);
    }

    public function user(){
        return $this ->belongsTo(User::class);
    }
    public function shipping(){
        return $this ->hasMany(shipping::class);
    }

    public function pay(){
        return $this ->hasMany(Payment::class);
    }

    
    public function food(){
        return $this ->belongsToMany(Food::class);
    }


    public function accessory(){
        return $this ->belongsToMany(Accessory::class);
    }




    protected $fillable=[
        'orderdate',
    ];
}
