<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function doctors()
    {
        $fetchDoctors = \App\Models\Doctor::all();
        return view('doctor')->with('fetchDoctors', $fetchDoctors );
    }
    public function reserve(){
        return view('reserveform');
    }






    public function getAllUsers($id){
        $selectingDotcor = \App\Models\Doctor::find($id);
        dd($selectingDotcor->users);
    }


    public function attachingToUSer($id){
        $selectingDotcor = \App\Models\Doctor::find($id);
        $selectingDotcor->users()->attach($id);
        dd($selectingDotcor);
;    }

    


}
