<?php

namespace App\Http\Controllers;

use App\Models\Registerem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class RegisteremConroller extends Controller
{
    //
    public function reg(){
        return view('registerem');
    }


    public function emp(Request $request)
    {

// return $request;
        $request->validate([
           

            'employee_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','unique:users'],
            'password' => ['required', 'confirmed',Password::min(3)],
            //'confirm_password'=>['required'|"min:3"],
            'gender'=>['required'],
            'age'=>['required','max:2'],
            'phone'=>['required','min:11','unique:users'],
            'position'=>['required'],

        ]);

        Registerem::create([

            'employee_name'=> request('employee_name'),
             'email' =>request('email'),
           'password' =>request('password'),
              'gender' =>request('gender'),
              'age' =>request('age'),
           'phone' =>request('phone'),
           'position' =>request('position'),

       
           ]);
           $dr= Registerem::where('email',$request->email)->where('password',$request->password)->count();
            if($dr==1)
              {
                  $dr= Registerem::where('email',$request->email)->where('password',$request->password)->first();
      
                  session(['id'=>$dr->id,'name'=>$dr->employee_name,'position'=>$dr->position]);
                  return session('position');
      
              }else{
                  return redirect('/registerem');  
              }

      

    }



    

}

