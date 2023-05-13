<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetPayment;
use App\Models\Buy_Animal;
use App\Models\Payment;

class PpayController extends Controller
{
    //
    public function preserv($pet_id){
        return view('petpayment')->with('pet_id',$pet_id);
    }

    public function petpay(){
      $pet=  Buy_Animal::where('animal_id',request('pet_id'))->first();
    $payment= Payment::create([
        'amount'=> $pet->price,
        'name' =>request('name'),
        'email' =>request('email'),
        'address' =>request('address'),
       'city' =>request('city'),
       'cardname' =>request('cardname'),
       'cardno' =>request('cardno'),
       'month' =>request('month'),
       'state' =>request('state'),
       'zip' =>request('zip'),
       'year' =>request('year'),
       'cvv' =>request('cvv'),
       'user_id' =>session('id'),
       'pet_id'=>request('pet_id')
       ]);

      if ($payment) {
        $ppet= Buy_Animal::where('animal_id',request('pet_id'))->update(['is_order'=>1]);
        return back()->with('success','Payment sucess');
    }else{
     return back()->with('error','Payment Fail');
    } 
}

// public function petreserve(){
//   $reserves=Buy_Animal::where('animal_id',request('pet_id'))->first();
//   $petreserve= PetPayment::create([
//     'amount'=> $reserves->price,
//     'user_id' =>session('id'),
//     'pet_id'=>request('pet_id')
// ]);

// if ($petreserve) {
//  $pet= Buy_Animal::where('animal_id',request('pet_id'))->update(['is_order'=>1]);
//  return back()->with('success','Pet is reserved successfully');
// }else{
//  return back()->with('error','Payment Fail');
// } 

}

// }
