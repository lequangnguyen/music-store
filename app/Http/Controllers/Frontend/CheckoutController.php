<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function GetCart(){
    	return view('frontend.cart.cart');
    }
    function GetCheckout(){
    	return view('frontend.cart.checkout');
    }
    function GetWishlist(){
    	return view('frontend.cart.wishlist');
    }
}
