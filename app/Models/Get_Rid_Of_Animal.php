<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Get_Rid_Of_Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'get_rid_name',
        'age',
        'type',
        'gender',
        'photo',
        'health_status',
    ];


    public function admin(){
        return $this ->belongsTo(Admin::class);
    }

    public function user(){
        return $this ->belongsTo(User::class);
    }

    protected $guarded = [ ];

}
