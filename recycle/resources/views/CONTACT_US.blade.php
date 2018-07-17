@extends('layouts.app')
@section('content')
<!--
  <div class="backg">
    
    <div class="content">
        <p>Welcome To Our Company</p>
         <p></p>


    </div>
    

  </div>

<div class="introduction">
    <form id="order">
     Name   <input type="text" placeholder="write your name">
     Email  <input type="email" placeholder="write email address" required>
     Place <input type="text"  placeholder="city" required>
     Tel <input type="text" placeholder="write your number">
    Quanity  <textarea cols="12" rows="10"> </textarea>

    <button type="submit" value="order now">
    </form>
    @include('partials.error')

</div>
-->
<section id="main" style=" margin-top: -40px">
 <div class="contactus">
   <!--   
    <div class="imagge">
        <img src="images/trash-2497065__340.jpg" alt="contact us ">
    </div>
      -->

      <form id="contact" method="POST" action="{{ url('contactus') }}">
                        @csrf
           @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

           <h1>
            CONTACT US
        </h1>
        <p>if there any qustion do not hesitate and send immediately</p>
        <hr>
            <div>
            
            <h3>Name</h3>

            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="write your name" required class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                
                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </div>
    <div>
            <h3>Telephone</h3>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="Tel" name="telephone" value="{{ old('telephone') }}" placeholder="write your number" required class="form-control {{ $errors->has('telephone') ? ' is-invalid' : '' }}">
            @if ($errors->has('telephone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                
        </div>
    <div>
            <h3>Email</h3>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email"  name="email" value="{{ old('email') }}" placeholder="write your email" required class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                
                 @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
       <div>
         <h3>Message</h3>
         <textarea cols="30" rows="10" name="message" value="{{ old('message') }}" required
         class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}"></textarea>  
          @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif              
       </div>
       <button type="submit">Submit</button>
       
    </form>
</section>
</div>
<footer>
  <div class="minia" style="float: left ;padding: 10px">
        <h4 style="margin: 0 10px;"><span style="color:#FF1493;font-size: 35px;font-family: 'Pacifico', cursive ">KEEP</span>
        <span style="font-size: 25px; color: #FF8C00";font-family: 'Rock Salt', cursive;>MINIA</span></br> 
        <span style="color:#FFD700;font-size: 40px; "> BEAUTIFUL</span></h4>
  </div>
   
    <div class="mail">

      <p> copyright &copy; 2018 All rights reserved</p>
      <!--<p>mah199645@gmail.com</p>-->
    </div>
    <div class="follow">
      <h3>follow us:</h3>
      <div class="icon">
       <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
       <a href="https://facebook.com/">  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
     </div>
   </div>
   <!--<div class="cont">-->
   <!--<div style="margin: 50px 0;">   <h5><ul>        <li><a href="CONTACT_US.html" target="_self">CONTACT US</a></li></ul></h5></div>-->
   <!--   <div >   <h5>TEL:01148557584</h5></div>-->
   <!--   <div>  <h5>mail:mah199645@gmail.com</h5></div>-->
   <!--  </div>-->
</footer>
<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection