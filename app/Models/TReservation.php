<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TReservation extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type',
        'subject',
        'age',
        'gender',
        'date',
        'tr_id',
    ];
}
