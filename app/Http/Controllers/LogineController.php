<?php

namespace App\Http\Controllers;

use App\Models\Registerem;
use Illuminate\Http\Request;

class LogineController extends Controller
{



    //
    public function log()
    {
        return view('logine');
    }

    public function checkinlogin(Request $request){
        // return $request;
               
                $request->validate([
                    'email'=>'required|email',
                    'password'=>'required',
        
        
                ]);
               // $user = User::where('email','=',$request->email and 'password','=',$request->password);
               // return $user;
              $emp= Registerem::where('email',$request->email)->where('password',$request->password)->count();
             // return $user; 
              if($emp==1)
                {
                    $emp= Registerem::where('email',$request->email)->where('password',$request->password)->first();
        
                    session(['id'=>$emp->id,'name'=>$emp->employee_name,'position'=>$emp->position]);
                    //return session('id');
         return redirect('/first_emp');
        
                }else{
                    return redirect('/logine');  
                }
        
            }
        public function emp_f(){
            return view('first_emp');
        }

            
    public function logout(){
        // return "hamada";
        session()->forget('id');
        session()->forget('employee_name');
        session()->flush();
        return redirect('/'); 

    }
        
}
