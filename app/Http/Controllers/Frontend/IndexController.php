<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
class IndexController extends Controller
{
    function GetIndex(){
    	return view('frontend.index');
    }
   
    function Get404(){
    	return view('frontend.404');
    }
    function GetContact(){
    	return view('frontend.contact');
    }
}
