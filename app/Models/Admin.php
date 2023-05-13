<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;



    
    protected $fillable=[
        'ad_name',
        'age',
        'email',
        'password',
        'role',
        'gender',
        
    ];

    public function profile(){
        return $this ->hasOne(Profile::class);
    }

    public function shelter(){
        return $this ->belongsTo(Shelter::class);
    }

    public function doctor(){
        return $this ->belongsTo(Doctor::class);
    }

    public function trainer(){
        return $this ->belongsTo(Trainer::class);
    }

    public function get_rid(){
        return $this ->hasMany(Get_Rid_Of_Animal::class);
    }

    public function buy_animal(){
        return $this ->hasMany(Buy_Animal::class);
    }

    public function orders(){
        return $this ->hasMany(Order::class);
    }











}
