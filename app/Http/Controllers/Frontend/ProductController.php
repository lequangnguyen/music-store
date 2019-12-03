<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function GetProduct(){
    	return view('frontend.product.product');
    }
    function GetProductDetail(){
    	return view('frontend.product.product-detail');
    }
}
