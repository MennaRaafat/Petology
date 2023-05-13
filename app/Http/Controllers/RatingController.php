<?php

namespace App\Http\Controllers;



use App\Models\Rate;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function add(Request $request){
        // return $request;
 $stars_rated= $request ->input('rate');
 $acc_id= $request->input('acc_id');
$existingrate = Rate::where('usser_id',session('id'))->where('accs_id',$acc_id)->first();
// $existingrate->update();
 if($existingrate){
$existingrate ->rate=$stars_rated;
 }
 else{
 Rate::create([
'usser_id'=>session('id'),
 'accs_id'=>$acc_id,
 'rate'=>$stars_rated,
 ]);
}
return redirect()->back()->with('status','thank you');
    }

    public function comment(){

        $comment=Rate::create([
                   'comment' =>request('comment'),
                    'usser_id' =>session('id'),
                   'accs_id' =>request('acc_id'),
                 ]);
      
                 if ($comment) {
                  return back()->with('success','comment sucess');
              }else{
               return back()->with('error','comment Fail');
              }
      }



      public function adding(Request $request){
        // return $request;
 $stars_rated_f= $request ->input('rate');
 $food_id= $request->input('food_id');
$existingrate = Rate::where('usser_id',session('id'))->where('food_id',$food_id)->first();
// $existingrate->update();
 if($existingrate){
$existingrate ->ratef=$stars_rated_f;
 }
 else{
 Rate::create([
'usser_id'=>session('id'),
 'food_id'=>$food_id,
 'rate'=>$stars_rated_f,
 ]);
}
return redirect()->back()->with('status','thank you');
    }

    public function commentfoodd(){

        $comment=Rate::create([
                   'comment' =>request('comment'),
                    'usser_id' =>session('id'),
                   'food_id' =>request('food_id'),
                 ]);
      
                 if ($comment) {
                  return back()->with('success','comment sucess');
              }else{
               return back()->with('error','comment Fail');
              }
      }

      public function show_comments(){
        $accessory_com = Rate::all();
        return $accessory_com;
    //  return view('accessories_details')->with('accessory', $accessory );
    }


}
