<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registerem extends Model
{
    use HasFactory;
    protected $fillable=[
        'employee_name',
        'age',
        'phone',
        'gender',
        'position',
        'email',
        'password',
    ];
}
