<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DReservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'health_status',
        'age',
        'gender',
        'date',
        'dr_id',
        'users_id',
        
    ];
}
