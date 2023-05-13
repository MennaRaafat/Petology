<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\Doctor;
use App\Models\Trainer;
use App\Models\Food;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function viewdoc(){
        $fetchDoctors = \App\Models\Doctor::all();
        return view('admindrcontrol')->with('fetchDoctors', $fetchDoctors );  
      }

      public function viewtrainer(){
        $fetchTrainers = \App\Models\Trainer::all();
        return view('admindrcontroltr')->with('fetchTrainers', $fetchTrainers );  
      }

      
      public function viewfood(){
        $fetchfoods = \App\Models\Food::all();
        return view('updatefood')->with('fetchfoods', $fetchfoods );  
      }


      public function viewacc(){
        $fetchacc = \App\Models\Accessory::all();
        return view('view_acc')->with('fetchacc', $fetchacc );  
      }




      public function viewformupdate($id){
        $Food_details=Food::where('food_id',$id)->first();

        return view('updatefoodform')->with('Food_details',$Food_details);
      }


      public function viewformaccupdate($id){
        $acc_details=Accessory::where('accessories_id',$id)->first();

        return view('updateaccform')->with('acc_details',$acc_details);
      }



      public function docdet($id){
        $doctor_details=Doctor::where('doctor_id',$id)->first();
        return view('docupdate' )->with('doctor_details',$doctor_details);
    }

    public function fooddet($id){
        $Food_details=Food::where('food_id',$id)->first();
        return view('updatefooddetails' )->with('Food_details',$Food_details);
    }



    public function accdet($id){
      $acc_details=Accessory::where('accessories_id',$id)->first();
      return view('viewaccdetails')->with('acc_details',$acc_details);
  }


    // public function fooddetform($id){
    //     $Food_detailss=Food::where('food_id',$id)->first();
    //     return view('updatefoodform' )->with('Food_detailss',$Food_detailss);
    // }

    public function trdet($id){
        $Trainer_details=Trainer::where('trainer_id',$id)->first();
        return view('trainerupdate' )->with('Trainer_details',$Trainer_details);
    }

public function updatedoc(Request $request ,$id){
   
    $doctor_details= Doctor::where('doctor_id', $id)->update([
        'doctor_id'=> $request->doctor_id,
        'dr_name'=>  $request->dr_name,
         'age' => $request->age,
       'description' => $request->description,
          'gender' => $request->gender,
          'price' => $request->price,
       'phone' => $request->phone,
       'rate' => $request->rate,
       
       ]);
    
       return back()->with('sucess','The data is updated');

}

public function updatefood(Request $request ,$id){

  if (!is_null($request->file('photo'))) {
            
    $file= $request->file('photo');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(public_path('public/animal'), $filename);
   $photo= 'http://localhost:8000/public/animal/'.$filename;

    }
   
    $Food_details= Food::where('food_id', $id)->update([
        'food_id'=> $request->food_id,
        'food_name'=>  $request->food_name,
         'type' => $request->type,
       'description' => $request->description,
        //   'gender' => $request->gender,
          'price' => $request->price,
       'expire_date' => $request->expire_date,
       'photo'=>$photo
       
       ]);

      
    
       return back()->with('sucess','The data is updated');

}




public function updateacc(Request $request ,$id){

  if (!is_null($request->file('photo'))) {
            
    $file= $request->file('photo');
    $filename= date('YmdHi').$file->getClientOriginalName();
    $file-> move(public_path('public/animal'), $filename);
   $photo= 'http://localhost:8000/public/animal/'.$filename;

    }
   
  $acc_details= Accessory::where('accessories_id', $id)->update([
      'accessories_id'=> $request->accessories_id,
      'acc_name'=>  $request->accname,
       'type' => $request->type,
     'description' => $request->description,
      //   'gender' => $request->gender,
        'price' => $request->price,
        'photo' =>$photo,

     
     ]);

   
  
  
     return back()->with('sucess','The data is updated');

}




public function updatetrainer(Request $request ,$id){
   
    $Trainer_details= Trainer::where('trainer_id', $id)->update([
        'trainer_id'=> $request->trainer_id,
        'tr_name'=>  $request->tr_name,
         'age' => $request->age,
       'description' => $request->description,
          'gender' => $request->gender,
          'price' => $request->price,
       'phone' => $request->phone,
       'rate' => $request->rate,
    //    $updatedoct ->save(),
       
       ]);
    //    return $request;
    //    return view('docupdate')->with('doctor_details',$doctor_details);

    
       return back()->with('sucess','The data is updated');

}


public function destroy($id)

    {
        $data=Doctor::where('doctor_id', $id)->delete(); //product of model created and get from it id
        // $data->delete();

        return redirect()->back();

    }


    public function destroyf($id)

    {

        $data=Food::where('food_id', $id); //product of model created and get from it id

        $data->delete();

        return redirect('/updatefood');

    }


    public function destroytr($id)

    {

        $datas=Trainer::where('trainer_id', $id); //product of model created and get from it id

        $datas->delete();

        return redirect()->back();

    }


    public function destroyacc($id)

    {

        $datacc=Accessory::where('accessories_id', $id); //product of model created and get from it id

        $datacc->delete();

        return redirect('viewacc');

    }


// public function update(Request $request){
//     $request->validate([
//         'dr_name' =>'required',
//         'age' =>'required',
//         'phone' =>'required',
//         'description' =>'required',
//         'price' =>'required',
//         'rate' =>'required',
//     ]);
//         $updoc = Doctor::where('doctor_id', $request->id);
//         $updoc->dr_name =$request->dr_name;
//         $updoc->age =$request->age;
//         $updoc->phone =$request->phone;
//         $updoc->description =$request->description;
//         $updoc->price =$request->price;
//         $updoc->rate =$request->rate;

//         $updoc->save();
//         return redirect('/doctor')->with('success','Data Has Been updated successfully');
//     }



}