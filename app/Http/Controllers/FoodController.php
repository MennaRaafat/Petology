<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    //
    public function foods()
    {
        $fetchFood = \App\Models\Food::all();
        return view('food')->with('fetchFood', $fetchFood );
    }

    public function add($food_id)
    {
        $food = \App\Models\Food::find($food_id);
        return $food ;
        // $cart = new Cart();
    }

    public function fdetails($id){
        $food=Food::where('food_id',$id)->first();
     return view('foods_detail')->with('food', $food );
    }

    public function foodview(){
        return view('adding_food');
    }



   


    public function addingfood(Request $requ){
        $requ->validate([
            'food_name'=>'required|max :191',
            // 'price'=>'required|max :2',
            'type'=>'required',
            'expire_date'=>'required',
            'photo'=>'required',
            'description'=>'required',
            // 'rate'=>'required',

        ]);
        // dd( $requ);
        // $destination = 'images/animal';
        if (!is_null($requ->file('photo'))) {
            
            $file= $requ->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/animal'), $filename);
           $photo= 'http://localhost:8000/public/animal/'.$filename;

            }
        
        Food::create([

            'food_name'=> request('food_name'),
            'photo' =>$photo,
            'type' =>request('type'),
            'description' =>request('description'),
             'price' =>request('price'),
            //   'rate' =>request('rate'),
              'expire_date'=>request('expire_date'),
           ]);   
    }


}
