<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Marriage;
// use Input;



class MarriageFormController extends Controller
{
    //
    public function marf(){
        return view('marrform');
    }


    public function get_a(Request $requ){
        $requ->validate([
            'marr_name'=>'required|max :191|min:5',
            // 'age'=>'required|max :2',
            'type'=>'required',
            'gender'=>'required',
            'photo'=>'required',
            'health_status'=>'required',
            'description'=>'required',

        ]);
        // dd( $requ);
        // $destination = 'images/animal';
        if (!is_null($requ->file('photo'))) {
            
            $file= $requ->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/animal'), $filename);
           $photo= 'http://localhost:8000/public/animal/'.$filename;

            }
        
        Marriage::create([

            'marr_name'=> request('marr_name'),
            'photo' =>$photo,
            'type' =>request('type'),
            'health_status' =>request('health_status'),
             'age' =>request('age'),
              'gender' =>request('gender'),
              'comment'=>request('comment'),
              'description' =>request('description'),

       
           ]);   
    }


    

}
