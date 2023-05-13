<?php

namespace App\Http\Controllers;

use App\Models\Get_Rid_Of_Animal;
use Illuminate\Http\Request;
use App\Models\Buy_Animal;
class GetController extends Controller
{
    //
    public function get(){
        return view('getrid');
    }





    public function getrids(Request $requ){
        $requ->validate([
            'get_rid_name'=>'required|max :191',
            // 'age'=>'required|max :2',
            'type'=>'required',
            'gender'=>'required',
            'photo'=>'required',
            'health_status'=>'required',
        ]);
        // dd( $requ);
        // $destination = 'images/animal';
        if ($requ->file('photo')) {
            // return "jjj";
            $file= $requ->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/animal'), $filename);
           $photo= 'http://localhost:8000/public/animal/'.$filename;
            }
            Get_Rid_Of_Animal::create([
                'photo'=>$photo,
                'get_rid_name'=>request('get_rid_name'),
                'type' =>request('type'),
                'health_status' =>request('health_status'),
                'age' =>request('age'),
               'gender' =>request('gender'),

               ]); 
               return redirect('/getrid');
        
    }

   
    public function review(){
        $animals= Get_Rid_Of_Animal::all();

        return view('/show_request')->with('animals',$animals);
    }
    public function accept($id){
        // return session('id');
        $animals= Get_Rid_Of_Animal::where('get_rid_of_id',$id)->first();
        
        Buy_Animal::create([

            'animal_name'=> $animals->get_rid_name,
           'price' =>5000,
              'type' =>$animals->type,
              'photo' =>$animals->photo,
           'health_status' =>$animals->health_status,
           'age' =>$animals->age,
           'gender' =>$animals->gender,
       'ad_id' => session('id')
           ]);
           $animals= Get_Rid_Of_Animal::where('get_rid_of_id',$id)->delete();

        // return $animals;
        return back()->with('success',' sucess');


    }

    public function reject($id){
        
        $animals= Get_Rid_Of_Animal::where('get_rid_of_id',$id)->delete();
        return back()->with('success',' sucess');
    }
}
