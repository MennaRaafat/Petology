<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buy_Animal;
use RealRashid\SweetAlert\Facades\Alert;

class BuyController extends Controller
{
    //
    public function buy_a()
    {
        $buy_animals=Buy_Animal::where('is_order',0)->get();
        return view('buy')->with('buy_animals',$buy_animals);
    }

//     public $id;

// public function mount($id){

//     $this->id = $id;
// }
//     public function bdet(){
//         $animal=Buy_Animal::where('id',$this->id)->first();
//         // return view('bdetails',['animal'=>$animal])->layout('layouts.buy');
//         // return view('bdetails')->with('animal',$animal);
//         return view('bdetails',compact('animal','id'));
//     }



// public function bdet($id){
// $anid=new Buy_Animal();
// $anid->find($id);
//    return view('bdetails',compact('anid','id'));

// }



}
