<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app3.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
        <link href="{{ asset('css/exchange.css') }}" rel="stylesheet">

</head>
<body>

  <div id="app">
<nav class="navbar has-shadow"  style="background-color: #F0E68C ;" >
  <div class="container">
    <div class="navbar-brand">
     <a class="navbar-brand" href="/">  <img src="../images/cr4/loogoo.jpg" alt="our logo" style="padding-top: 0px;margin-top: -5px"></a>


                </a>
       
      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>
    <div class="navbar-menu" >
      <div class="navbar-start" >
        <a class="navbar-item is-tab is-active" class="current" href="/" style=" padding: 5px;margin: 15px">HOME</a>
        <a class="navbar-item is-tab" href="/makeorder" style=" padding: 5px;margin: 15px">MAKE ORDER</a>
        <a class="navbar-item is-tab" href="/points" style=" padding: 5px;margin: 15px">POINTS</a>
        <a class="navbar-item is-tab"  href="/about" style=" padding: 5px;margin: 15px">ABOUT</a>
        <a class="navbar-item is-tab"  href="contactus" target="_self" style=" padding: 5px;margin: 15px">CONTACT US</a>
        @if (Auth::check())
        <a class="navbar-item is-tab" href="/admin" target="_self" style=" padding: 5px;margin: 15px">admin</a>
@endif

         </div>
      

      <!--  <li class="current" style="color:   #00FFFF; background-color: #C5EFF7; padding: 5px;margin: 15px"><a href="/">HOME</a></li>
        <li style=" padding: 5px;margin:15px"><a href="/makeorder">MAKE ORDER</a></li>
        <li style="padding: 5px;margin: 15px"><a href="/points">POINTS</a></li>
        <li style=" padding: 5px;margin: 15px"><a href="/about">ABOUT</a></li>
        <li style=" padding: 5px;margin: 15px"><a href="contactus" target="_self">CONTACT US</a></li>
  
      <li style=" padding: 5px;margin: 15px"><a href="/admin" target="_self">admin</a></li> 
          -->

       <!-- end of .navbar-start -->

    <!--
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"
        style="background-color: #F0E68C">
            <div class="container">
               
 <a class="navbar-brand" href="/">  <img src="../images/cr4/loogoo.jpg" alt="our logo" style="padding-top: 0px;margin-top: -5px"></a>


                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar 

            <ul class="nav navbar-nav navbar-left" id="mynav" style="margin: 0 100px ; padding: 20px  ">
        <li class="current" style="color:   #00FFFF; background-color: #C5EFF7; padding: 5px;margin: 15px"><a href="/">HOME</a></li>
        <li style=" padding: 5px;margin:15px"><a href="/makeorder">MAKE ORDER</a></li>
        <li style="padding: 5px;margin: 15px"><a href="/points">POINTS</a></li>
        <li style=" padding: 5px;margin: 15px"><a href="/about">ABOUT</a></li>
        <li style=" padding: 5px;margin: 15px"><a href="contactus" target="_self">CONTACT US</a></li>
  
      <li style=" padding: 5px;margin: 15px"><a href="/admin" target="_self">admin</a></li>
 </ul>
             -->
          <!--   <ul class="navbar-nav ml-auto nav navbar-right">
                        Authentication Links -->
      <div class="navbar-end nav-menu" style="overflow: visible">

                        @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @else
                 

<div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Hey {{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="/profile" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                </span>Profile
              </a>

              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-bell m-r-5"></i>
                </span>Notifications
              </a>
              <a href="#" class="navbar-item">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5"></i>
                </span>Settings
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
        @endguest
      </div>
    



            </div>
        </nav>
        
</div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
   <!--
     <footer style="margin-top: 500px">
  <div class="minia" style="float: left ;padding: 10px">
        <h4 style="margin: 0 10px;"><span style="color:#FF1493;font-size: 35px;font-family: 'Pacifico', cursive ;" >KEEP</span>
        <span style="font-size: 25px; color: #FF8C00";font-family: 'Rock Salt', cursive;>MINIA</span></br> 
        <span style="color:#FFD700;font-size: 40px; "> BEAUTIFUL</span></h4>
  </div>
   
   
   <div class="mail">
      <p > copy right &copy; All rights reserved</p>
      <!--<p>mah199645@gmail.com</p>

   <div class="follow">
      <h3>follow us:</h3>
        <div class="icon">
       <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
       <a href="https://facebook.com/">  <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
    
    </div>
  </div>
</footer>
-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
<script src="js/plugins
.js"></script> 
<script src="{{ asset('js/exchange.js') }}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

</html>
    <!--
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

</body>
</html>
