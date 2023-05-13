<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_Animal extends Model
{
    use HasFactory;


    public function admin(){
        return $this ->belongsTo(Admin::class);
    }

    public function user(){
        return $this ->belongsTo(User::class);
    }

    protected $fillable = [
        'animal_name',
        'price',
        'photo',
        'type',
        'description',
        'health_status',
        'age',
        'gender',
        'ad_id',
        'u_id',
    ];
}
