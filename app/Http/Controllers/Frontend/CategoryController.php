<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getProducts(){
    	return view('frontend.category.index');
    }
    function GetProductDetail(){
    	return view('frontend.product.product-detail');
    }
}
