<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    
    protected $fillable=[
        'amount',
        'name',
        'user_id',
        'email',
        'address',
        'city',
        'cardname',
        'cardno',
        'month',
        'state',
        'zip',
        'year',
        'cvv',




    ];

    public function order(){
        return $this ->belongsTo(Order::class);
    }
}
