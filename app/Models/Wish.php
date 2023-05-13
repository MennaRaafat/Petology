<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;
    protected $fillable=[
        'ussers_id',
        'foodd_id',
        'accsse_id',
    ];


    public function fwish(){
        return $this ->belongsTo(Food::class,'foodd_id','food_id');
    }
 
    public function awish(){
        return $this ->belongsTo(Accessory::class,'accsse_id','accessories_id');
    }
}
