<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;
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
        dd($r->all());
        echo "asdasdasds";
    }
}
