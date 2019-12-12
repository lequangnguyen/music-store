@extends('frontend.layout.master')
@section('content')
  <!-- catg header banner section -->  
  <!-- / catg header banner section -->
 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <h2 style="text-align: center">Your order is successfully !</h2>
          <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
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
                          <td></td>
                          <td><a href="#"><img src="{{$row->options->image}}" alt="img"></a></td>
                          <td><a class="aa-cart-title" href="#">{{$row->name}}</a></td>
                          <td>${{number_format($row->price,0,"",".")}}</td>
                          <td>{{$row->qty}}</td>
                        <td>${{number_format($row->price*$row->qty,0,"",".")}}</td>
                      </tr>
                      @endforeach                 
                      </tbody>
                  </table>
                </div>
             </form>  
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Total</th>
                     <td></td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

@endsection