<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Cart;
class PayementController extends Controller
{
    //
    public function payment(){
        $total=0;
        $fetchCart= Cart::with(['fcart','acart'])->where('u_id',session('id'))->where('order_id',0)->get();
    //    return $fetchCart;
   
        foreach ($fetchCart as $key => $value) {
            if (!is_null($value->fcart)) {
                $total=$total+($value->fcart->price*$value->ordered_qty);

            }  
        }

        foreach ($fetchCart as $key => $value) {
            if (!is_null($value->acart)) {
                $total=$total+($value->acart->price*$value->ordered_qty);

            }
         }
        //  return $total;
return view("payment")->with('fetchCart', $fetchCart)->with('sub_total',$total);
// return $total;
    }
    // public function payinfo(){
    // //     $total=0;
    // //    $fetchCart= Cart::with('fcart')->where('u_id',session('id'))->get();
    // //    foreach ($fetchCart as $key => $value) {
    // //       $total=$total+$value->fcart->price;
    // //    }
    // $total=0;

    // //    $fetchCart= Cart::with('fcart')->where('u_id',session('id'))->get();

    // $fetchCart= Cart::with(['fcart','acart'])->where('u_id',session('id'))->get();
    //    foreach ($fetchCart as $key => $value) {

    //     if(!is_null($value->f_id)){

    //         $total=$total+($value->fcart->price*$value->ordered_qty);

         

    //       }
    //       else{

    //           $total=$total+($value->acart->price*$value->ordered_qty);  
    //       }
    //     //   return $total;

    // //  $payment=   Payment::create([
    // //         'amount'=> $total+50,
    // //         // 'amount'=> request('qty')+50,

    // //          'name' =>request('name'),
    // //           'email' =>request('email'),
    // //           'address' =>request('address'),
    // //        'city' =>request('city'),
    // //        'cardname' =>request('cardname'),
    // //        'cardno' =>request('cardno'),
    // //        'month' =>request('month'),
    // //        'state' =>request('state'),
    // //        'zip' =>request('zip'),
    // //        'year' =>request('year'),
    // //        'cvv' =>request('cvv'),
    // //        'user_id' =>session('id'),
    // //        ]);
    // //       if ($payment) {
    // //         $fetchCart= Cart::where('u_id',session('id'))->update(['order_id'=>$payment->id]);
    // //         return back()->with('success','Payment sucess');
    // //     }else{
    // //      return back()->with('error','Payment Fail');
    // //     } 


    //    }

      
    // }




    public function payments(){
        $total=0;
        $fetchCart= Cart::with(['fcart','acart'])->where('u_id',session('id'))->where('order_id',0)->get();
    //    return $fetchCart;
   
        foreach ($fetchCart as $key => $value) {
            if (!is_null($value->fcart)) {
                $total=$total+($value->fcart->price*$value->ordered_qty);

            }  
        }

        foreach ($fetchCart as $key => $value) {
            if (!is_null($value->acart)) {
                $total=$total+($value->acart->price*$value->ordered_qty);

            }
         }
           $payment=   Payment::create([
            'amount'=> $total+50,
            // 'amount'=> request('qty')+50,

             'name' =>request('name'),
              'email' =>request('email'),
              'address' =>request('address'),
           'city' =>request('city'),
           'cardname' =>request('cardname'),
           'cardno' =>request('cardno'),
           'month' =>request('month'),
           'state' =>request('state'),
           'zip' =>request('zip'),
           'year' =>request('year'),
           'cvv' =>request('cvv'),
           'user_id' =>session('id'),
           ]);
          if ($payment) {
            $fetchCart= Cart::where('u_id',session('id'))->update(['order_id'=>$payment->id]);
            return back()->with('success','Payment sucess');
        }else{
         return back()->with('error','Payment Fail');
        } 

        //  return $total;
// return view("payment")->with('fetchCart', $fetchCart)->with('sub_total',$total);
// return $total;
    }





    public function deletepay($cart_id){
        $fetchCart=Cart::where('cart_id',$cart_id)->first();
        $fetchCart= $fetchCart->delete($cart_id);
        // return $fetchCart;
        if ($fetchCart) {
         return back()->with('success','delete To Cart sucess');
     }else{
      return back()->with('error','delete To Cart Fail');
     }
  
}

}