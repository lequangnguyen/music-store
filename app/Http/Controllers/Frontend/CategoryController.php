<?php

namespace App\Http\Controllers\Frontend;

use App\Repository\ProductRepositoryInterface;
use App\Repository\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    function getProducts(){
    	return view('frontend.category.index');
    }
}
