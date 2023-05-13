<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileAdminController extends Controller
{
    public function profileadmin(){
        if(session('role')=='admin'){
           $user= User::where('user_id',session('id'))->first();
// return $user;
return view('profileadmin')->with('user',$user);
        }else{
           // return 'ahmed';
            // hyrag3 3la page el login 
        }

    }
}
