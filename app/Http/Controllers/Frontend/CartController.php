<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
class CartController extends Controller
{
    function GetCart(){
    	  $data['cart']=Cart::content();
        $data['total']=Cart::total(0,"",".");
        if (Auth::check()) {
          if (Auth::user()->point >=200 ) {
          $data['discount']=Cart::total(0,"",".")*90/100;
          $data['has_discount']=1;
          }
          else{
          $data['has_discount']=0;
           }
        }      
       	return view('frontend.cart.cart',$data);
    }

    function AddToCart(request $r){
	 $product=Products::find($r->id_product);
      Cart::add([
      	'id'=>$product->id,
      	'name'=>$product->name,
      	'qty'=>	$r->quantity,
      	'price'=>$product->price,
      	'weight'=>0,
      	'options'=>['image'=>$product->image],
      ]);
     return redirect('cart');
    }
    function UpdateCart($rowId,$qty){
      Cart::update($rowId,$qty);
      return 1;
    }
    function DeleteCart($rowId){
      Cart::remove($rowId);
      return redirect()->back();
    }
}
 