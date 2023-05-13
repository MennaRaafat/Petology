<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fooddetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordered_qty',
    ];
}
