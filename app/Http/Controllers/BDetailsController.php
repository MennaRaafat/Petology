<?php

namespace App\Http\Controllers;

use App\Models\Buy_Animal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BDetailsController extends Controller
{
    //
// public $id;

// public function mount($id){

//     $this->id = $id;
// }
//     public function bdet(){
//         $animal=Buy_Animal::where('id',$this->id)->get();
//         // return view('bdetails',['animal'=>$animal])->layout('layouts.buy');
//         // return view('bdetails')->with('animal',$animal);
//         return view('bdetails',compact('animal'));
//     }

// public function bdet()
// {
//     $inventories = Buy_Animal::all();
//     return view('bdetails')->with('inventories',$inventories);
// }

public function bdet($id){
    // Alert::success('Thank you for your interest');
    $buy_animal=Buy_Animal::where('animal_id',$id)->first();
    // return $buy_animal;
    return view('bdetails')->with('buy_animal',$buy_animal);
}

public function test(){
    if(session('id')==0){
     return redirect("/login");
    }
}
}
