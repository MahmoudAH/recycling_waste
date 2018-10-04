@extends('layouts.app')
@section('content')
      <section style=" margin-left: 200px;margin-top: 80px;width: 600px;position: relative;
    text-align: center;
    color: white;
    font-size: 20px;border-bottom:  5px dotted #29B6F6;padding-bottom: 50px
    " >
      <div class="row">
        <div class="col-md-12">
    <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;">Earn from waste</h1>
      <img src="Original images/3CF5E3F600000578-4203620-image-a-1_1486560118182.jpg" width="100%" height="500" alt="" >
        <div class="centered" style="position: absolute;
    top: 92%;
    left: 50%;
    transform: translate(-50%, -50%);"><a href="/points/earnfromwaste" style="color: white"><span style="background-color: #1976D2;padding: 10px;"> 5 ways to earn from waste </span></a></div>

    </div>
    </div>

    <div class="row" style="margin-top: 30px">
        <div class="col-md-6" style="position: relative;
    text-align: center;
    color: white;
    font-size: 20px">
      <img src="Original images/sorted-recyclables_103017_Rawpixel.com_shutterstock_591166076-300x230.jpg" width="100%" height="500" alt="" >
      <div class="centered" style="position: absolute;
    top: 91%;
    left: 50%;
    transform: translate(-50%, -50%);width: 270px;background-color:#1976D2 "><a href="/points/earnfromwaste/junk-mail" style="color: white;width: 250px"><span style="padding: 10px;width: 100%"> Junk mail </span></a></div>

    </div>

     <div class="col-md-6" style="position: relative;
    text-align: center;
    color: white;
    font-size: 20px">
      <img src="Original images/household-recycling.jpg" width="100%" height="700px" alt="" >
      <div class="centered" style="position: absolute;
    top: 91%;
    left: 50%;
    transform: translate(-50%, -50%);width: 270px;background-color:#1976D2"><a href="/points/earnfromwaste/sell-and-swap" style="color: white"><span style="padding: 10px;"> sell and swap </span></a></div>

    </div>
   </div>
      </section>

  <aside class="side1" style="margin-top: -750px">
    
  <ul class="list-group" style="background-color: #DCEDC8">
            <li class="list-group-item text-muted" style="background-color: #F48FB1">Earn from waste
 <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"  ><span class="pull-left"  ><strong><a href="/points/earnfromwaste" style="text-decoration: none;">5 ways to earn from waste</a> </strong></span>
             </li>
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/points/earnfromwaste/junk-mail"  style="text-decoration: none;">junk mail</a> </strong></span> </li>
            
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/points/earnfromwaste/sell-and-swap" style="text-decoration:none;">sell and swap</a> </strong></span> </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
          
</aside>

<!--
      <section style=" margin-left: 200px;margin-top: 100px" >
<div class="money">
      <h1 style="color: #69F0AE;font-size: 30px;">Earn from waste</h1>
      <img src="Original images/3CF5E3F600000578-4203620-image-a-1_1486560118182.jpg" width="50%" height="500" alt="" >
    </div>
  </section>

-->



<section class="poi" style="margin-top: -50px">
<div class="container money2">
  <div class="row">
    <div class="col-md-12">
      <div class="p" style="text-align: center;">
        <p style="color: #F012BE;font-family: 'Courgette', cursive ;
"> Point</p>
        
 <div class="progress">
  <div class="progress-bar progress-bar-success active" role="progressbar" style="width:40%" aria-valuenow="10"
  aria-valuemin="0" aria-valuemax="100">
    
  </div>
  <div class="progress-bar progress-bar-warning active" role="progressbar" style="width:10%">
  </div>
  <div class="progress-bar progress-bar-danger active" role="progressbar" style="width:20%">
  </div>
                   </div>

       <h3 style="margin-top: 50px"><strong style=" border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 36px;
  height: 36px;
  padding: 15px;
  background: #E6EE9C;
  border: 2px solid #666;
  color: #666;

  text-align: center;
  font: 32px Arial, sans-serif;">{{auth()->user()->points}}</strong> <br>
        </h3>
       
      </div>     
    </div>
    
    <div class="col-md-4 p1" >
      
        <a>
          <button style="background-color: #29B6F6">
            <i class="fa fa-gift" aria-hidden="true"></i>
            Get Gift
          </button>
        </a>
              </div>

        
          <div class="col-md-4 p11" >
        <a href="/exchange">
          <button style="background-color: #B39DDB">
            
            <i class="fa fa-credit-card " aria-hidden="true"></i>

            replace point

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
<footer style="margin-top:-10px;margin-bottom: 0 ">
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