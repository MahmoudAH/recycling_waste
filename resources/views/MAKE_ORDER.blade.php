@extends('layouts.app')
@section('content')



 <!--<div id="now">-->
  <div class="container">
    @include('partials.error')
<div class="row">
        <div class="col-md-8 fact">
    <h1 style="color: #69F0AE;font-size: 30px;margin-bottom: 30px;border-bottom: 5px dotted #EEEEEE ;padding: 10px;text-align: left;font-family: 'Courgette', cursive ;">Information and facts</h1>
      <img src="Original images/DIY-Projects-with-recycled-things.jpg" width="100%" height="500" alt="" >
        <div class="centered" style="position: absolute;
    top: 92%;
    left: 50%;
    transform: translate(-50%, -50%);"><a href="/informationandfacts" style="color: white;text-decoration: none;"><span style="background-color: #1976D2;padding: 10px;"> some things you may did not know you can recycle </span></a></div>

    </div>
    <div class="col-md-4">
<section id="facts">
    
  <ul class="list-group" style="background-color: #DCEDC8;
  margin-top: 50px">
            <li class="list-group-item text-muted" style="background-color: #F48FB1">Information and facts
 <i class="fa fa-dashboard fa-1x"></i></li>

            <li class="list-group-item text-right"  ><span class="pull-left"  ><strong><a href="/informationandfacts" style="text-decoration: none;">some things you did not know you can recycle</a> </strong></span>
             </li>
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="informationandfacts/recyclingmagic"  style="text-decoration: none;">Recycling magic</a> </strong></span> </li>
            
            <li class="list-group-item text-right" ><span class="pull-left" ><strong><a href="/informationandfacts/reduce-population" style="text-decoration:none;">easy ways to reduce population</a> </strong></span> </li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
          </ul> 
       </section>   

    </div>
    </div>
  </div>
    <form id="now" method="POST" action="{{url('makeorder'),auth()->user()->id }}" >
                        @csrf   

   <h3 style=" border-bottom: 2px solid red;
    font-family: 'Anton', sans-serif;
    font-size: 50px;
    padding-bottom: 15px">
    fill the next form and order </h3>
 <div class="container">
   <div class="row" style="margin-top: 10px">
     <div class="col-md-6">
        <img src="images/jpg/Capture1.jpg" alt="glass" class="img-responsive glass"></br></br>
       <input type="text" style="height: 45px" name="glass" placeholder="glass" class="glass form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  required style="margin-top: -40px">
       </br></br>
@if ($errors->has('glass'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('glass') }}</strong>
                                    </span>
                                @endif
     </div>
   
     <div class="col-md-6">
        <img src="images/jpg/stack-of-paper-vector-doodle-paper-stack-stress-vector.jpg"
          alt="paper" class="img-responsive paper" ></br></br>
        <input type="text" name="paper" placeholder="paper"  class="inp_1" required style="margin-top: 0px">  
     </div>
</div>  
   <!-- row2-->
   <div class="row" style="margin-top: -30px">
     <div class="col-md-6">
        <img src="images/jpg/images (4)-iloveimg-converted.jpg" alt="plastic-containers" class="img-responsive plastic" ></br></br>
        <input type="text" name="plastic_containers" placeholder="plastic containers"  class="plastic"> 
     </div>

     <div class="col-md-6">
       <img src="images/jpg/alum.jpg" alt="kanz-containers" class="img-responsive aluminum" ></br></br>
       <input type="text" name="kanz_containers" placeholder="kanz-containers"  class="inp_2" style="margin-top: -10px"> 
     </div>
</div>
   <!-- row3-->
   <div class="row" style="margin-top: 20px">
        <div class="col-md-6" >
           <img src="images/jpg/item420065 (1)-iloveimg-converted.jpg" alt="steal" class="img-responsive steal" >
           <input type="text" name="steal" placeholder="steal"  class="inp_3"  style="margin-top: 30px"> 
        </div>

     <div class="col-md-6">
         <img src="images/jpg/images (10).jpg" alt="food" class="img-responsive food"  >
         <input type="text" name="food" placeholder="Food"  class="inp_4" style="margin-top: 30px">  
     </div>
</div> 
   <!-- row4-->
   <div class="row" style="margin-top: 20px">
    <div class="col-md-6">

         <img src="images/jpg/336.jpg" alt="paper" class="img-responsive elec"  >
         <input type="text" name="electronic" placeholder="electronic"  class="inp_5" style="margin-top: 30px">  
     </div>

     <div class="col-md-6">
        <img src="images/jpg/172690560_98ae354df2.jpg" alt=" paper" class="img-responsive pags"  >
        <input type="text" name="plastic_bages" placeholder="plastic pages"  class="inp_6" style="margin-top: 30px">  
  
     </div>
  </div>
</div>
  <!--
   <div  >
    <img src="images/jpg/Capture1.jpg" alt="glass" class="glass"></br></br>
    <input type="text" name="glass" placeholder="glass" class="glass"></br></br>
    </div>
 
   <div>
     <img src="images/jpg/stack-of-paper-vector-doodle-paper-stack-stress-vector.jpg"
          alt="paper" class="paper" ></br></br>
    <input type="text" name="paper" placeholder="paper"  class="inp_1">  
  </div>
   
   <div>
     <img src="images/jpg/images (4)-iloveimg-converted.jpg" alt="paper" class="plastic" ></br></br>
    <input type="text" name="paper" placeholder="plastic containers"  class="plastic">  
  </div>
   
   <div   >
     <img src="images/jpg/alum.jpg" alt="paper" class="aluminum" ></br></br>
    <input type="text" name="paper" placeholder="kilos"  class="inp_2">  
  </div>
  
  <div   >
     <img src="images/jpg/item420065 (1)-iloveimg-converted.jpg" alt="paper" class="steal" >
    <input type="text" name="paper" placeholder="kilos"  class="inp_3">  
  </div>
  
  <div   >
     <img src="images/jpg/images (10).jpg" alt="paper" class="food"  >
    <input type="text" name="paper" placeholder="Food"  class="inp_4" >  
  </div> 
  
   <div   >
     <img src="images/jpg/336.jpg" alt="paper" class="elec"  >
    <input type="text" name="paper" placeholder="electronic"  class="inp_5" >  
  </div>
  
    <div   >
     <img src="images/jpg/172690560_98ae354df2.jpg" alt="paper" class="pags"  >
    <input type="text" name="paper" placeholder="plastic pags"  class="inp_6" >  
  </div>
  -->
  <section class="address">   
       <!--<label class="label">Address</label> -->
        <i class="fa fa-asterisk  start" aria-hidden="true"></i>
       <select  name="city" class="place form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" required>
            <option selected="" disabled=""> Select address</option>
            <option>shalby</option>
            <option>shahen city</option>
            <option>a5sa5</option>
            <option>taha hussein</option>
            <option>adnan</option>
            <option>ma7ta</option>
            <option>damaris</option>
            <option>cornis street</option>
<!--
@if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif -->
   $rules = [
    
    'vehicles_year' => 'required|...',
    
        ];
        </select>
        
    </section>
<!--
   <section id="check">
     
      <div class="head">
        <h4><i class="fa fa-asterisk" aria-hidden="true"></i>

How do you get in return: </h4></div> 
      <div class="check1">
        <input type="radio" name="money" class="money" checked>
           Money
      </div>
      <div class="check2">
        <input type="radio" name="money" class="point">
                  Points
</div>
   </section> 
   -->
<section class="return">   
       <!--<label class="label">Address</label> -->
        <i class="fa fa-asterisk  start2" aria-hidden="true"></i>
       <select  name="return" class="form-control return2" placeholder="How do you get in return" required>
            <option selected="" disabled=""> How do you get in return</option>
            <option>MONEY</option>
            <option>POINTS</option>
            
        </select>
</section>
<section>

                 <i class="fa fa-asterisk  start2" aria-hidden="true"></i>

           <input type="text" name="instructions" placeholder="Any Special Instructions here" class="form-control inst" style="width: 50%;
  height: 50px; 
" optional>
  
</section>


      
       <div id="order_now2">
          
        <button onclick="come">
          <a >submit </a>
        
             <!--<i class="fa fa-hand-o-down" aria-hidden="true"></i>-->
       </button>
       <!--
       <button  ><a href="http://127.0.0.1:8000/makeorder/add/{{Auth::id()}}">ADD </a>
</button>
     -->          
       </div >
       
           
  </form>
 </div>

<aside class="side">
  <div class="s1">
  <h3 style="border-bottom: 1px solid #013243;font-family: 'Courgette', cursive ;">Did you know :</h3>
  <p>Egypt's garbage is estimated at 70 million tons a year, and the report said the daily garbage is 47,
  000 tons, and the largest share of Cairo alone is 19,000 tons daily, which is one of the richest garbage
  types in the world, with a ton rate of 6000 pounds for the important ingredients of many manufacturing industries. See, Egypt spends about 24 billion pounds annually on the cost of environmental degradation.
</p>
  </div>
  <div class="s2">
    <h3 style="border-bottom: 1px solid #013243;font-family: 'Courgette', cursive ;">Do you have a problem</h3>
    <p> if you have any problem just <a href="/contactus">contact us</a></p>
  </div>
</aside>



 <!-- <div id="order">
    <img src="images/playmobil-771313_1920.jpg">
     
        </div>
     
    
      <div id ="description">
        <h3>Recycling Gallery </h3></br></br>
          <div class="content-img">

          <div class="img1" style="display: inline">  <a href=steal.html>
         <img src="images/jpg/Capture5.jpg" alt="paper"   style="width:15%;height: 25% "></a></div>
         
          
        
          <div class="img2" style="display: inline"> <a href=glass.html>
          <img src="images/jpg/Capture1.jpg" alt="paper" style="width:30%;height: 25% "></a>
        
          </div>
         
          <div class="img3" style="display: inline"> <a href="plastic.html">
          <img src="images/jpg/Capture9.jpg" alt="paper" style="width:30%;height: 25%"></a></div>
           
        
               <div class="img4" style="display: inline"> <a href=aluminum.html>
           <img src="images/jpg/alu.jpg" alt="paper"
                style="width:15%;height: 25% "></a>
           </div>
        
</br>

          <div class="img5"style="display: inline"><a href="plastic_bages.html">
          <img src="images/jpg/Capture4.jpg" alt="paper" class="img1" style="width:15%;height: 60% ;margin-top: 10px"></a></div>
         
           
              <div class="img6" style="display: inline" class="content-img"> <a href=paper.html>
        <img src="images/jpg/Capturej.jpg" alt="paper" class="img1"  style="width:30%;height: 25% ;margin-top: -170px" ></a>
        
        </div>
         
        <div class="img7" style="display: inline"> <a href=cartons.html>
             <img src="images/jpg/Capture8.jpg" alt="paper"  style="width:30%;height: 27% ;margin-top: -170px"></a></div>
           
           <div class="img8" style="display: inline"> <a href="electronics.html">
           <img src="images/jpg/Capture7 (1).jpg" alt="paper"  class="img1" style="width:15%;height: 25% ;margin-top: -170px"></a></div>
                    </div>
         
          <div class="img9" style="display: inline" class="content-img"> <a href=href="househould.html">
        <img src="images/jpg/Capture11.jpg" alt="paper" class="img1"  style="width:35%;height: 30% ;
        margin-top: -330px;margin-left: 150px"></a>
        
        </div>
        
          <div class="img10" style="display: inline" class="content-img"> <a href="food.html">
        <img src="images/jpg/Capture6.jpg" alt="paper" class="img1"  style="width:35%;height: 30% ;
        margin-top: -370px;margin-left: 500px"></a>
        
        </div>
         <!--
         <a href="househould.html">
         <img src="images/jpg/Capture11.jpg" alt="paper"  class="img1" style="width:30%;height: 25% ;margin-top: -350px;margin-left: 160px">
        -->


        

</div>
<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection