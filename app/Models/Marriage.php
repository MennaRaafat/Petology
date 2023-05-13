<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    use HasFactory;

    protected $fillable=[
        'marr_name',
        'photo',
        'type',
        'description',
        'health_status',
        'age',
        'gender',
        'comment',

    ];

    public function user(){
        return $this ->hasOne(User::class);
    }
}
