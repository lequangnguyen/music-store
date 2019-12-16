@extends('frontend.layout.master')
@section('content')
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Cart Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Cart</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
       
     <div class="row">  
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form id="form-cart" method="POST" action="checkout" >
                @csrf
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach ($cart as $row)
                        <tr>
                          <td><a class="remove" onclick="return delete_cart('{{$row->name}}')" href="/cart/del/{{$row->rowId}}"><fa class="fa fa-close"></fa></a></td>
                          <td><a href="#"><img src="{{$row->options->image}}" alt="img"></a></td>
                          <td><a class="aa-cart-title" href="#">{{$row->name}}</a></td>
                          <td>${{number_format($row->price,0,"",".")}}</td>
                          <td><input onchange=" update_cart('{{$row->rowId}}',this.value) " class="aa-cart-quantity" type="number" value="{{$row->qty}}"></td>
                        <td>${{number_format($row->price*$row->qty,0,"",".")}}</td>
                      </tr>
                      @endforeach                 
                      </tbody>
                  </table>
                </div>
            
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>${{$total}}</td>
                   </tr>
                   @if (Auth::check())
                     <tr>
                     <th>Discount</th>
                     <td>@if (Auth::user()->point >=200)
                       10%
                     @else
                       0% 
                     @endif</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>@if (Auth::user()->point >=200)
                       ${{$discount}}
                      @else
                      ${{$total}}
                     @endif</td>
                   </tr>
                  <input type="hidden" name="voucher" value="{{$has_discount}}">
                  <input type="hidden" name="total" value="{{$total}}">
                   @endif
                 </tbody>
               </table>
               <button type="submit" class="aa-cart-view-btn">Proced to Checkout</button>
             </div>
              </form>  
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

@endsection
