<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

   
    use HasFactory;

    protected $fillable=[
        'dr_name',
        'age',
        'phone',
        'rate',
        'price',
        'photo',
        'description',
        'email',
        'email_verified_at',
        'password',
        'doctor_id'
    ];
protected $hidden=[
    'remember_token',
];

    // public function user(){
    //     return $this -> hasMany(User::class);
    // }

    public function profile(){
        return $this ->hasOne(Profile::class);
    }


    public function admin(){
        return $this ->hasMany(Admin::class);
    }

    public function user(){
        return $this ->hasMany(User::class);
    }




    public function users(){
        return $this->belongsToMany(User::class,'d_reservation');
    }

}
