<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
	 function PostRegister(RegisterRequest $r){
      dd($r->all());
    }
    function GetRegister(){
    	return view('frontend.user.account');
    }
}
