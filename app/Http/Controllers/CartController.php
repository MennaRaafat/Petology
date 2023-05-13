<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Food;
class CartController extends Controller
{
    //
   
    public function cart()
    {
       $total=0;
       $fetchCart= Cart::with(['fcart','acart'])->where('u_id',session('id'))->where('order_id',0)->get();
// return $fetchCart;
       foreach ($fetchCart as $key => $value) {
           if (!is_null($value->fcart)) {
            $total=$total+($value->fcart->price);
          

           }else{
            $total=$total+$value->acart->price;  
        }
       }
    // return $fetchCart;
        return view('cart')->with('fetchCart', $fetchCart)->with('sub_total',$total);
    }

     public function test2()
    {
        Cart::create([
            'ordered_qty'=> request('qty').value('qty'),
            'f_id' =>request('f_id'),
            'u_id' =>session('id'),
           // 'accs_id' =>request('gender'),
           ]);   
           return back()->with('success','Added To Cart sucess');

         }

         public function test3()
         {
             Cart::create([
                 'ordered_qty'=> request('qty').value('qty'),
                 'accs_id' =>request('accs_id'),
                 'u_id' =>session('id'),
                // 'accs_id' =>request('gender'),
                ]);   
                return back()->with('success','Added To Cart sucess');
     
              }

    public function addToCart($f_id){
       // return session('id');
   $cart=Cart::create([
    'ordered_qty'=> 1,

    'f_id' =>$f_id,
   'u_id' =>session('id'),
   // 'accs_id' =>request('gender'),
   ]);
//    return $cart;
   if ($cart) {
       return back()->with('success','Added To Cart sucess');
   }else{
    return back()->with('error','Added To Cart Fail');
   }
        // insert qty - product id -  user id  
        // harg3 3la el saf7a ely kont wa2f 3leha tany 

        // cart leh ? 
        //show kol el prod ely 7atha f el cart bat3o 
        // cart blade btn check out hywdeni 3la page esmha check out 
        // checkout page  total money  ely mwgod f el cart  w feha el form bat3t el bank 

    }


    public function addToCaart($accs_id){
        // return session('id');
    $caart=Cart::create([
     'ordered_qty'=>1,
     'accs_id' =>$accs_id,
    'u_id' =>session('id'),
    // 'accs_id' =>request('gender'),
    ]);
 //    return $cart;
    if ($caart) {
        return back()->with('success','Added To Cart sucess');
    }else{
     return back()->with('error','Added To Cart Fail');
    }
         // insert qty - product id -  user id  
         // harg3 3la el saf7a ely kont wa2f 3leha tany 
 
         // cart leh ? 
         //show kol el prod ely 7atha f el cart bat3o 
         // cart blade btn check out hywdeni 3la page esmha check out 
         // checkout page  total money  ely mwgod f el cart  w feha el form bat3t el bank 
 
     }

    public function deleteCart($cart_id){
        $cart=Cart::where('cart_id',$cart_id)->first();
       $cart= $cart->delete($cart_id);
       if ($cart) {
        return back()->with('success','delete To Cart sucess');
    }else{
     return back()->with('error','delete To Cart Fail');
    }

    }

//     public function increase($cart_id){
// $product_cart= Cart::get($cart_id);
// $qty=$product_cart->qty+1;
// cart::update($cart_id,$qty);
//     }

public function purchase(){
  
    $total=0;
       $fetchCart= Cart::with(['fcart','acart'])->where('u_id',session('id'))->where('order_id',0)->get();
    foreach ($fetchCart as $key => $value) {
        if (!is_null($value->fcart)) {
         $total=$total+($value->fcart->price*$value->ordered_qty);

        }else{
         $total=$total+($value->acart->price*$value->ordered_qty);  
     }
    }
    return view('final_purchase')->with('sub_total',$total);
}

// public function purr(){

// }

}
