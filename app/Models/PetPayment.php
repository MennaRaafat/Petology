<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetPayment extends Model
{
    use HasFactory;
public $table='pet_payment';
    
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
        'pet_id'




    ];



}
