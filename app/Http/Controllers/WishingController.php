<?php

namespace App\Http\Controllers;

use App\Models\Acc_Added;
use App\Models\Accessory;
use App\Models\Food;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishingController extends Controller
{
    //
    public function wish($foodd_id){
        // return $request;
        // $accs_id= $request->input('acc_id');
// $food=$request->input('foodd_id');
    $existingwish = Wish::where('ussers_id',session('id'))->where('foodd_id',$foodd_id)->first();
    // $existingrate->update();
     if($existingwish){
    $existingwish ->wish;
     }
     else{
     Wish::create([
    'ussers_id'=>session('id'),
     //'accss_id'=>$accs_id,
     'foodd_id'=>$foodd_id,
     ]);
    }
    // return $request;
    return redirect()->back()->with('status','thank you');
        }


        public function wishing($accsse_id){
            // return $request;
            // $accs_id= $request->input('acc_id');
    // $food=$request->input('foodd_id');
        $existingwish = Wish::where('ussers_id',session('id'))->where('accsse_id',$accsse_id)->first();
        // $existingrate->update();
         if($existingwish){
        $existingwish ->wish;
         }
         else{
         Wish::create([
        'ussers_id'=>session('id'),
         'accsse_id'=>$accsse_id,
        //  'foodd_id'=>$foodd_id,
         ]);
        }
        // return $request;
        return redirect()->back()->with('status','thank you');
            }

            public function viewwish(){
                // $fetchDoctor = \App\Models\Doctor::all();
                // return  $fetchDoctor;
        // return $id;
        
                if(session('id')){
                    $fetchfood=Accessory::all();

                    $viewwish= Wish::where('ussers_id',session('id'))->get();
                return view('wish')->with('viewwish',$viewwish)->with('fetchfood',$fetchfood);
                            }
                            else{
                                return('0');
                            }
            }

            public function appearwish(){
 
                $fetchwish= Wish::with(['fwish','awish'])->where('ussers_id',session('id'))->get();
             
                // return $fetchwish;
                return view('wish')->with('fetchwish', $fetchwish);
             
            }

}
