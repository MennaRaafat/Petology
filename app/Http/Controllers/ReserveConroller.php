<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\DReservation;
use App\Models\Trainer;
use App\Models\TReservation;

use Illuminate\Http\Request;

class ReserveConroller extends Controller
{
    //
    public function reserve($id){
        // $fetchDoctor = \App\Models\Doctor::all();
        // return  $fetchDoctor;
// return $id;
        return view('reserveform')->with('doctor_id',$id);

        if($id == session('id')){

            $view_res= DReservation::where('dr_id',session('id'))->get();
        return view('/drreservations')->with('view_res',$view_res);
                    }
                    else{
                        return('0');
                    }
    }

public function returnRecerve(){
    $view_res= DReservation::where('dr_id',session('id'))->get();
    return view('/drreservations')->with('view_res',$view_res);

}


public function returnRecerve2(){
    $view_res= TReservation::where('tr_id',session('id'))->get();
    return view('/trreservations')->with('view_res',$view_res);

}


    

    public function get_a(Request $requ){
        $requ->validate([
            'name'=>'required|max:191|min:5',
            'age'=>'required',
            'type'=>'required',
            'gender'=>'required',
            'health_status'=>'required',
        ]);


    }

    public function res(Request $request){
        // return $request->date;
        $request->validate([
            'name'=>'required|max:191|min:5',
            'age'=>'required',
            'type'=>'required',
            'gender'=>'required',
            'health_status'=>'required',
        ]);
        DReservation::create([

            'name'=> request('name'),
           'health_status' =>request('health_status'),
              'gender' =>request('gender'),
              'age' =>request('age'),
           'date' =>$request->date,
           'type' =>request('type'),
           'users_id' =>session('id'),
       'dr_id' => request('dr_id')
           ]);

           return redirect('/doctor');

    }

    public function precent(){
$fetchDoctor=Doctor::all();
$Sum=0;
       $res= DReservation::where('dr_id','>',0)->get();
       foreach ($res as $key => $value) {

           if ($value->dr_id>0) {
            $value->doctor_price=(Doctor::where('doctor_id',$value->dr_id)->first()->price*15)/100;
              $value->doctor_name=(Doctor::where('doctor_id',$value->dr_id)->first()->dr_name);

        
           }

           $Sum=$Sum+ $value->doctor_price;

       }

       return view('doccounter')->with('value',$value)->with('res',$res)->with('Sum',$Sum);
    // return $Sum;
    }


    public function precenttr(){
        $Sum=0;
        $res_tr= TReservation::where('tr_id','>',0)->get();
        foreach ($res_tr as $key => $value) {
            if ($value->tr_id>0) {
               $value->trainer_price=(Trainer::where('trainer_id',$value->tr_id)->first()->price*15)/100;
               $value->trainer_name=(Trainer::where('trainer_id',$value->tr_id)->first()->tr_name);

            }
            $Sum=$Sum+ $value->trainer_price;

        }

        return view('trainercounter')->with('value',$value)->with('res_tr',$res_tr)->with('Sum',$Sum);
    }

    // public function dr($id){
    //     $view_res = DReservation::where('emp')
    // }
    // public function dr($id){
    //     // Alert::success('Thank you for your interest');
    //     // $view_res=DReservation::where('doctor_id',$id)->first();
    //     // // return $buy_animal;
    //     // return view('drreservaions')->with('view_res',$view_res);


        
    // }

    // public function dr(){
    //     // Alert::success('Thank you for your interest');
    //     $view_res=DReservation::all();
    //     // return $buy_animal;
    //     return view('drreservations')->with('view_res',$view_res);
    // }

    



    public function reser(Request $request){
        // return $request->date;
        $request->validate([
            'name'=>'required|max:191|min:5',
            'age'=>'required',
            'type'=>'required',
            'gender'=>'required',
            'subject'=>'required',
        ]);
        TReservation::create([

            'name'=> request('name'),
           'subject' =>request('subject'),
              'gender' =>request('gender'),
              'age' =>request('age'),
           'date' =>$request->date,
           'type' =>request('type'),
           'users_id' =>session('id'),
       'tr_id' => request('tr_id')
           ]);

           return redirect('/trainer');

    }
}
