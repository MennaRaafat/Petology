<?php
namespace App\Http\Controllers;
use App\Models\Accessory;
use App\Models\Rate;
use Illuminate\Http\Request;
class AccessoriesController extends Controller
{
    public function aacessory()
    {
        $fetchacc = \App\Models\Accessory::all();
        return view('accessories')->with('fetchacc', $fetchacc );
    }    
    public function adetails($id){
        $accessory=Accessory::where('accessories_id',$id)->first();
     return view('accessories_details')->with('accessory', $accessory );
    }
    public function accview(){
        return view('adding_acc');
    }
    public function addingaccs(Request $requ){
        $requ->validate([
            'acc_name'=>'required|max :191|min:5',
            'type'=>'required',
            'photo'=>'required',
            'description'=>'required',
            'rate'=>'required', ]);
            
        if (!is_null($requ->file('photo'))) {
            $file= $requ->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/animal'), $filename);
           $photo= 'http://localhost:8000/public/animal/'.$filename;
            }  
        Accessory::create([
            'acc_name'=> request('acc_name'),
            'photo' =>$photo,
            'type' =>request('type'),
            'description' =>request('description'),
             'price' =>request('price'),
              'rate' =>request('rate'),
           ]);   

           return redirect('viewacc');

    }

    






    public function add($accessories_id)
    {
        $acc = \App\Models\Accessory::find($accessories_id);
        return $acc ;
        // $cart = new Cart();
    }




    

}
