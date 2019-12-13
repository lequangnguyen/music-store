<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Orders,OrderDetail};
use Cart;

class CheckoutController extends Controller
{
    function GetCheckout(){
    	$data['cart']=Cart::content();
        $data['total']=Cart::total(0,"",".");
    	return view('frontend.cart.checkout',$data);
    }
    function CheckLogin(){
    	if (Auth::check()==false) {
    		return 1;
    	}
    }
    function PostCheckout(Request $r){
    	$data['cart']=Cart::content();
        $data['total']=Cart::total(0,"",".");
		$order=new Orders;
		$order->user_id=Auth::id();
		$order->status='processing';
		$order->save();
        foreach(Cart::content() as $row){
            $order_detail=new OrderDetail;
            $order_detail->product_id=$row->id;
            $order_detail->order_id=$order->id;
            $order_detail->quantity=$row->qty;
            $order_detail->cost=round($row->price*$row->qty,0);
            $order_detail->save();
        }
        return view('frontend.cart.checkout',$data);
    }
}
