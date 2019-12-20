@extends('frontend.layout.master')
@section('content')
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">        
              <div class="col-md-12">
                <div class="aa-myaccount-register">                 
                 <h4>Info user</h4>
                 @if (session('Notice'))
                   <div class="alert alert-success">
                  <strong>{{session('Notice')}}</strong> 
                   </div>
                 @endif
                 <table class="info-user">
                   <tr>
                     <th>Email:</th>
                     <td>{{$user->email}}</td>
                   </tr>
                   <tr>
                     <th>Name:</th>
                     <td>{{$user->name}}</td>
                   </tr>
                   <tr>
                     <th>Phone:</th>
                     <td>{{$user->phone}}</td>
                   </tr>
                   <tr>
                     <th>Address:</th>
                     <td>{{$user->address}}</td>
                   </tr>
                   <tr>
                     <th>Point:</th>
                     <td>{{$user->point}}</td>
                   </tr>
                   <tr>
                     <th></th>
                     <td><a href="/user/edit">Edit Profile</a> <a href="/user/change">Change password</a></td>
                   </tr>
                 </table>
                </div>
              </div>
              {{-- History --}}
              <div class="col-md-12">
                <div class="aa-myaccount-register">                 
                 <h4>Order History</h4>
                 <table class="order-table">
                    <tr>
                      <th>Order Code</th>
                      <th>Discount</th>
                      <th>Status</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                    @foreach ($order as $row)
                    <tr>
                      <td>{{$row->code}}</td>
                      <td>@if($row->discount==1)10% @else 0% @endif</td>
                      <td>@if($row->status==0)Not Delivery @else Delivered @endif</td>
                      <td>${{$row->total}}</td>
                      <td><a href="/user/order/{{$row->order_id}}">Detail</a>/<a class="delete_order_client" href="/user/delete_order/{{$row->order_id}}">Delete</a></td>
                    </tr>
                    @endforeach
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

  <!-- footer -->
@endsection