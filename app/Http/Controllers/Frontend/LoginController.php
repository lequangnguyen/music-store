<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
     function PostLogin(LoginRequest $r){
     	$email=$r->email;
     	$password=$r->password;

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
    		return redirect()->back();
    	}
    }
     function Logout{
     	Auth::logout();
     	return redirect()->back();
    }
}
