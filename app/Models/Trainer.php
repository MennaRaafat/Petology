<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable=[
        'tr_name',
        'age',
        'phone',
        'rate',
        'price',
        'photo',
        'description',
        'email',
        'email_verified_at',
        'password',
    ];

    protected $hidden=[
        'remember_token',
    ];

    public function profile(){
        return $this ->hasOne(Profile::class);
    }

    public function admin(){
        return $this ->hasMany(Admin::class);
    }

    public function user(){
        return $this ->hasMany(User::class);
    }


}
