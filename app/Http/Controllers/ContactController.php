<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function contact(){
    Contact::create([

        'name'=> request('name'),
         'email' =>request('email'),
       'message' =>request('message'),
       'users_id' =>session('id'),
       ]);
return redirect('/');
    }

 public function admincon()
    {
        $contact=Contact::all();
        return view('messages')->with('contact',$contact);

 }
}
