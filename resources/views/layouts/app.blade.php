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
    <script src="{{ asset('js/userprofile.js') }}" defer></script>


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
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

  <div id="app">
<nav class="navbar has-shadow"  style="background-color: #4DB6AC ;height: 100px;margin-bottom: 0;padding-bottom: 0;text-decoration: none;">
  <div class="container">
    <div class="navbar-brand">
     <a class="navbar-brand" href="/">  <img src="../images/cr4/loogoo.jpg" alt="our logo" style="margin-top: 4px"></a>


                </a>
       
      <button class="button navbar-burger">
       <span></span>
       <span></span>
       <span></span>
     </button>
    </div>
    <div class="navbar-menu" >
      <div class="navbar-start" >
        <a class="navbar-item is-tab is-active" class="current" href="/" style=" padding: 5px;margin: 15px;text-decoration: none;">HOME</a>
        <a class="navbar-item is-tab" href="/makeorder" style=" padding: 5px;margin: 15px;text-decoration: none;">MAKE ORDER</a>
        <a class="navbar-item is-tab" href="/points" style=" padding: 5px;margin: 15px;text-decoration: none;">POINTS</a>
        <a class="navbar-item is-tab"  href="/about" style=" padding: 5px;margin: 15px;text-decoration: none;">ABOUT</a>
        <a class="navbar-item is-tab"  href="/contactus" target="_self" style=" padding: 5px;margin: 15px;text-decoration: none;">CONTACT US</a>
        @if (Auth::check())
        <a class="navbar-item is-tab" href="/admin" target="_self" style=" padding: 5px;margin: 15px;text-decoration: none;">admin</a>
@endif

         </div>
      

      <div class="navbar-end nav-menu" 
      style="overflow: visible;">

                        @guest
                            <a class="nav-link" style=" padding: 10px;margin-top: 20px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="nav-link" style=" padding: 10px;margin-top: 20px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @else
                 

<div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">Hey {{Auth::user()->name}}</a>
            <div class="navbar-dropdown is-right" >
              <a href="/profile" class="navbar-item" style="text-decoration: none;">
                <span class="icon">
                  <i class="fa fa-fw fa-user-circle-o m-r-5" style="font-size: 15px"></i>
                </span>
               <span style="font-size: 20px"> Profile</span>
              </a>
              <a href="#" class="navbar-item" style="text-decoration: none;">
                <span class="icon">
                  <i class="fa fa-fw fa-cog m-r-5" style="font-size: 15px"></i>
                </span>
                  <span style="font-size: 20px">  Settings
</span>
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" style="text-decoration: none;" class="navbar-item" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5" style="font-size: 15px"></i>
                </span>
             <span style="font-size: 20px">  Logout
</span>
 
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
     <footer >
  <div class="minia" style="float: left ;padding: 10px">
        <h4 style="margin: 0 10px;"><span style="color:#FF1493;font-size: 35px;font-family: 'Pacifico', cursive ;" >KEEP</span>
        <span style="font-size: 25px; color: #FF8C00";font-family: 'Rock Salt', cursive;>MINIA</span></br> 
        <span style="color:#FFD700;font-size: 40px; "> BEAUTIFUL</span></h4>
  </div>
   
   
   <div class="mail">
      <p > copy right &copy; All rights reserved</p>
      <!--<p>mah199645@gmail.com</p>
--
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

<script type="text/javascript">
   function resetForm(registrationForm1)
   {
       var myForm = document.getElementById(registrationForm1);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>


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
