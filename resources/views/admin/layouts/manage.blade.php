
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
                <script src="{{ asset('js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('js/raphael.min.js')}}"></script>
        <script src="{{ asset('js/morris.min.js')}}"></script>
        <script src="{{ asset('js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/startmin.js')}}"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #000000;height: 50px">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="font-size: 25px;padding: 5px">Admin</a>
                </div>
                <div class="navbar-header">
                    <a  href="{{route('/')}}" style="font-size: 25px;padding: 5px">Home</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                

<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manageusers.dashboard')}}">Dashboard</a></li>
         <li><a href="{{route('manageorders.manageorders')}}">Manage Orders</a></li>

    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manageusers.index')}}">Manage Users</a></li>
      
      <li><a href="{{route('manageorders.manageorders')}}">Manage Orders</a></li>
      <li>
        <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
        <ul>
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                    <!-- /.col-lg-8 -->
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
