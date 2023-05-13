<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;

   
    protected $fillable=[
        'usser_id',
        'food_id',
        'accs_id',
        'rate',
        'comment',
    ];

}
