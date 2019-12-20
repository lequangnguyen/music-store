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
                 <h4>Edit Profile</h4>
                 @if (session('Notice'))
                   <div class="alert alert-success">
                  <strong>{{session('Notice')}}</strong> 
                   </div>
                 @endif
                 <form action="/user/edit" class="aa-login-form" method="post">
                   @csrf
                    <label for="">Your name<span>*</span></label>
                    <input type="text" placeholder="Your name" name="your_name" value="{{$user->name}}">
                    {!!ShowError($errors,'your_name')!!}
                     <label for="">Address<span>*</span></label>
                    <input type="text" placeholder="Your adress" name="address" value="{{$user->address}}">
                    {!!ShowError($errors,'address')!!}
                     <label for="">Telephone Number<span>*</span></label>
                    <input type="text" placeholder="Telephone number" name="telephone" value="{{$user->phone}}">
                    {!!ShowError($errors,'telephone')!!}
                    <button type="submit" class="aa-browse-btn">Confirm</button>
                    <button class="aa-browse-btn"><a href="/user/account">Cancel</button>                     
                  </form>
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