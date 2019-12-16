<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Orders,OrderDetail};
use Cart;
use App\User;

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
        // dd((int)Cart::total()/10);
    	$data['cart']=Cart::content();
        $data['total']=Cart::total(0,"",".");
        $user=User::find(Auth::id());
		$order=new Orders;
		$order->user_id=Auth::id();
		$order->status=0;
        $user->point=$user->point+(int)Cart::total()/10;
        if (Cart::count()<=0) {
            return redirect('/cart');
        }else{
		$order->save();
        $user->save();
        foreach(Cart::content() as $row){
            $order_detail=new OrderDetail;
            $order_detail->product_id=$row->id;
            $order_detail->order_id=$order->id;
            $order_detail->quantity=$row->qty;
            $order_detail->cost=round($row->price*$row->qty,0);
            $order_detail->save();
        }
        Cart::destroy();
        return view('frontend.cart.checkout',$data);
        }
    }
}
