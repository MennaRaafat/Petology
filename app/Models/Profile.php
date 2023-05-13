<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable=[
        'profile_name',
    ];

    public function trainer(){
        return $this ->belongsTo(Trainer::class);

    }

    public function doctor(){
        return $this ->belongsTo(Doctor::class);

    }

    public function seller(){
        return $this ->belongsTo(Seller::class);
    }

    public function admin(){
        return $this ->belongsTo(Admin::class);
    }

}
