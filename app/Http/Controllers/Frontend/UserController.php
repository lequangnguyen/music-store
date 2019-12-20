<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Users,OrderDetail,Orders};
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AccountUser;
use App\Http\Requests\{EditUserRequest,ChangePasswordRequest};
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function GetAccount(){
        $data['total']=array();
    	$data['user']=Auth::user();	
        $data['order']=Orders::where('user_id',Auth::id())->get();
        // $data['total']=OrderDetail::where('order_id',$data['order']->id)->sum('cost');
        foreach ($data['order'] as $key=> $value) {
            $value=OrderDetail::where('order_id',$value->id)->sum('cost');
            array_push($data['total'],$value);
        }   
        dd($data['total']);
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
