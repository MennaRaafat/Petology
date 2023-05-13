<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Validator;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // function checklogin(Request $request){

    //     // $this ->validate($request,[
    //     //  'email'  => 'required|email',
    //     //  'password'  => 'required',
    //     // ]);

    //     // $user_data = array(
    //     //     'email' => $request->get('email'),
    //     //     'password' => $request->get('password'),
    //     // );
    //     // if(Auth::attempt($user_data))
    //     // {
    //     //     return redirect('/');
    //     // }


    // }
}
