<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MReservation;
class MarriageController extends Controller
{
    //
    
    public function mar(){
        return view('marriage');
    }

public function sendMessage(){

  $msgs=   MReservation::create([
             'msg' =>request('msg'),
              'animal_id' =>request('animal_id'),
              'to_user_id' =>request('to_user_id'),
             'from_user_id' =>session('id'),
           ]);

           if ($msgs) {
            return back()->with('success','message sucess');
        }else{
         return back()->with('error','message Fail');
        }
}
}
