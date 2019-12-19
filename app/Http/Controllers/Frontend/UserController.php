<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AccountUser;
use App\Http\Requests\{EditUserRequest,ChangePasswordRequest};
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function GetAccount(){
    	$data['user']=Auth::user();	
    	return view('frontend.user.info',$data);
    }
    function GetEditUser(){
    	$data['user']=Auth::user();	
    	return view('frontend.user.edit',$data);
    }
    function PostEditUser(EditUserRequest $r){
    	$user=Users::find(Auth::id());
    	$user->name=$r->your_name;
    	$user->phone=$r->telephone;
    	$user->address=$r->address;
    	$user->save();
    	return redirect()->route('profileUser')->with('Notice','Edit Profie succsessfully!');
    }
     function GetChangePassword(){
    	return view('frontend.user.change');
    }
    function PostChangePassword(ChangePasswordRequest $r){
        $user=Auth::user();
        if (Hash::check($r->password, $user->password)) {
           $user->password=bcrypt($r->new_password);
           $user->save();
           return redirect()->route('profileUser')->with('Notice','Change Password succsessfully!'); 
        }else
          return redirect()->route('ChangePassword')->with('Notice','Your old password is not correct!'); 
        dd($user);
    }
}
