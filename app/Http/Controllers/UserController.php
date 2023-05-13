<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{

    // public function index()
    // {
    //     return view('add-blog-post-form');
    // }
    //

    public function signup(){
        //return "ahmed";
        return view("register");
    }

    public function signin(){
       // return "merehaan";
        return view("login");
    }

    public function information(Request $request)
    {

// return $request;
        $request->validate([
           

            'us_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','unique:users'],
            'password' => ['required', 'confirmed',Password::min(3)],
            //'confirm_password'=>['required'|"min:3"],
            'gender'=>['required'],
            'age'=>['required','max:2'],
            'phone'=>['required','min:11','unique:users'],

        ]);

        // $name = $request->us_name;
        // $email = $request->email;
        // $password = $request->password;
        // $gender = $request->gender;
        // $age = $request->age;
        // $phone = $request->phonenumber;


        // $p = new User;

        // $p->us_name =  $name;
        // $p->email =  $email;
        // $p->password =  $password;
        // $p->gender =  $gender;
        // $p->age =  $age;
        // $p->phonenumber =  $phone;

        // $p->save();

        // return redirect('/first');



        // $validator = Validator::make($request->all(),[
        //     'us_name' => 'required | min:3',
        //     'email' => 'required | max:191 | unique:users,email',
        //     'password' => 'required | min:3',
        //     'confirm_password' => 'required | min:3',
        //     'gender' => 'required',
        //     'age' => 'required | max:2 | numeric',
        //     'phone' => 'required | max:11 | unique:users,phone'
            
        // ]);
        // if($validator -> fails()){
        //     return $validator -> errors();
        // }
        User::create([

            'us_name'=> request('us_name'),
             'email' =>request('email'),
           'password' =>request('password'),
              'gender' =>request('gender'),
              'age' =>request('age'),
           'phone' =>request('phone'),

       
           ]);

           $user= User::where('email',$request->email)->where('password',$request->password)->count();
           // return $user; 
            if($user==1)
              {
                  // haft7 session 
                  //id bat3 el user 
                  //name bat3 el user 
                  $user= User::where('email',$request->email)->where('password',$request->password)->first();
      
                  session(['id'=>$user->user_id,'name'=>$user->us_name]);
                  //return session('id');
         return redirect('/first');
      
              }else{
                  return redirect('/register');  
              }
    }

   public function checklogin(Request $request){
// return $request;
       
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',


        ]);
       // $user = User::where('email','=',$request->email and 'password','=',$request->password);
       // return $user;
      $user= User::where('email',$request->email)->where('password',$request->password)->count();
     // return $user; 
      if($user==1)
        {
            // haft7 session 
            //id bat3 el user 
            
            //name bat3 el user 
            $user= User::where('email',$request->email)->where('password',$request->password)->first();
if ($request->email=='mazzen@gmail.com'&&$request->password="1234") {
    session(['id'=>$user->user_id,'name'=>$user->us_name,'role'=>'admin']);
    return redirect('/profileadmin');
}
            session(['id'=>$user->user_id,'name'=>$user->us_name]);
            //return session('id');
 return redirect('/first');
        }else{
            return redirect('/login');  
        }
    }

    public function user_login(){
        return view('first');
    }


    public function logout(){
        // return "hamada";
        session()->forget('id');
        session()->forget('name');
        session()->flush();
        return redirect('/'); 

    }
}
