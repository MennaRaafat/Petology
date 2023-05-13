<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable=[
        'seller_name',
        'email',
        'logo',
        'email_verified_at',
        'password',
    ];

    protected $hidden=[
        'remember_token'
    ];

    public function profile(){
        return $this ->hasOne(Profile::class);
    }

    public function food(){
        return $this ->belongsToMany(Food::class);
    }

    public function acc(){
        return $this ->belongsToMany(Accessory::class);
    }
}
