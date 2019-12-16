<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\User;
class IndexController extends Controller
{
    function GetIndex(){
    	$user=User::find(Auth::id());
    	session()->put('point', $user->point);
    	return view('frontend.index');
    }
   
    function Get404(){
    	return view('frontend.404');
    }
    function GetContact(){
    	return view('frontend.contact');
    }
}
