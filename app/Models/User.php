<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'us_name',
        'email',
        'password',
        'confirm_password',
        'gender',
        'age',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'confirm_password',

    ];

    // public function marriage(){
    //     return $this ->belongsTo(Marriage::class);

    // }


    public function doctor(){
        return $this ->belongsTo(Doctor::class);

    }
    public function doctors(){
        return $this->belongsToMany(Doctor::class,'d_reservation');
    }

    public function trainer(){
        return $this ->belongsTo(Trainer::class);

    }

    public function order(){
        return $this ->hasMany(Order::class);
    }

    public function get(){
        return $this ->hasMany(Get_Rid_Of_Animal::class);
    }

    public function buy(){
        return $this ->hasMany(Buy_Animal::class);
    }

    public function cart_u(){
        return $this ->hasOne(Cart::class);
    }

    public function contacts(){
        return $this ->belongsTo(Contact::class);
    }   

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function dr_reservation(){
    //     return $this ->belongsTo(Doctor::class);
    // }

   protected $guarded = [ ];
   
}
