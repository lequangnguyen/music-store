<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    function GetCheckout(){
    	return view('frontend.cart.checkout');
    }
    function CheckLogin(){
    	if (Auth::check()==false) {
    		return 1;
    	}
    }
}
