<?php

namespace App\Http\Controllers;

use App\Models\TReservation;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //
    public function trainers()
    {
        $fetchTrainer = \App\Models\Trainer::all();
        return view('trainer')->with('fetchTrainer', $fetchTrainer );
    }
    public function reservetraine($id){
        // $fetchDoctor = \App\Models\Doctor::all();
        // return  $fetchDoctor;
// return $id;
        return view('reservetrainer')->with('trainer_id',$id);

        if($id == session('id')){

            $view_res= TReservation::where('tr_id',session('id'))->get();
        return view('/trreservations')->with('view_res',$view_res);
                    }
                    else{
                        return('0');
                    }
//         if($id == session('id')){

// return view(TReservation::where('trainer_id',session('id')));
//         }
//         else{
//             return('0');
//         }
    }
}
