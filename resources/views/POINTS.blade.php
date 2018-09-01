@extends('layouts.app')
@section('content')
  <section style=" margin-top: -30px" >
    <div class="money">
      <img src="images/money1.jpg" width="100%" height="900" alt="" >
    </div>
  </section>
<section class="poi">
<div class="container money2">
  <div class="row">
    <div class="col-md-12">
      <div class="p" style="text-align: center;">
        <p style="color: #F012BE
"> Point</p>
        
    <span style="width: 25%" class="meter"></span>

       <h3 style="margin-top: 80px"><strong style=" border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 36px;
  height: 36px;
  padding: 15px;
  background: #fff;
  border: 2px solid #666;
  color: #666;

  text-align: center;
  font: 32px Arial, sans-serif;">{{auth()->user()->points}}</strong> <br>
        </h3>
       
      </div>     
    </div>
    
    <div class="col-md-4 p1" >
      
        <a>
          <button >
            <i class="fa fa-gift" aria-hidden="true"></i>
            Get Gift
          </button>
        </a>
              </div>

        
          <div class="col-md-4 p11" >
        <a href="/exchange">
          <button>
            
            <i class="fa fa-credit-card " aria-hidden="true"></i>

            replace point

          </button>
        </a>
         </div>
    
    <div class="col-md-12 p2">
        <a>
          <button>
            <i class="fa fa-exclamation" aria-hidden="true"></i>


            Read more about points
          </button>
        </a>
        
      </div>
    </div>
    
    
  </div>
</div>


</section>  


<!--
<div class="introduction">
    <form id="order">
     Name   <input type="text" placeholder="write your name">
     Email  <input type="email" placeholder="write email address" required>
     Place <input type="text"  placeholder="city" required>
     Tel <input type="text" placeholder="write your number">
    Quanity  <textarea cols="12" rows="10"> </textarea>

    <button type="submit" value="order now">
    </form>
    
</div>

<div class="contactus">
    <!--
    <div class="imagge">
        <img src="images/trash-2497065__340.jpg" alt="contact us ">
    </div>
  -->
  <!--
    <form id="contact">
        <h1>
            Get In Touch With Us
        </h1>
        <p>if there any qustion do not hesitate and send immediately</p>
        <hr>
            <div>
            
            <h3>Name</h3>
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="write your name">
                
        </div>
    <div>
            <h3>Telephone</h3>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="text" placeholder="write your number">
                
        </div>
    <div>
            <h3>Email</h3>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="write your email">
                
        </div>
       <div>
         <h3>Message</h3>
            <i class="fa fa-info" aria-hidden="true"></i>
         <textarea cols="30" rows="10"></textarea>                
       </div>
       <button type="submit">Submit</button>
       
    </form>
</div>
-->
</br></br></br>
<!--
<footer>
  <div class="minia" style="float: left ;padding: 10px">
        <h4 style="margin: 0 10px;"><span style="color:#FF1493;font-size: 35px;font-family: 'Pacifico', cursive ">KEEP</span>
        <span style="font-size: 25px; color: #FF8C00";font-family: 'Rock Salt', cursive;>MINIA</span></br> 
        <span style="color:#FFD700;font-size: 40px; "> BEAUTIFUL</span></h4>
  </div>
   
    <div class="mail">

      <p> copyright &copy; 2018 All rights reserved</p>
      <!--<p>mah199645@gmail.com</p>-
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
   <!--  </div>--
</footer>
-->
<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection