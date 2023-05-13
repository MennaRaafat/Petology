<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Payment;

use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function getOrders(){

$orders=Cart::with(['fcart','acart','ucart'])->where('u_id','!=',83)->where('order_id','!=',0)->get();


return view("adminorders")->with('orders',$orders);
    }
}
