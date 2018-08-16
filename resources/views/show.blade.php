@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Details</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
            
                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>



                    <hr>

                    <div class="order-details">
                        <strong style="color: #0074D9

;font-size: 20px"> User Id:</strong>{{auth()->user()->id}}<br>
 <strong style="color: #0074D9;font-size: 20px"> Points :</strong>{{auth()->user()->points}}<br>

                        <strong>Order ID:</strong> {{ $order->id }} <br>
                        <strong>Address:</strong> {{ $order->city }} <br>
                        <strong>return that you want:</strong> {{ $order->return }} <br>
<!--
                        @if ($order->instructions != '')
                            <strong>Instructions:</strong> {{ $order->instructions }}
                        @endif -->
                        @isset($order->instructions )
                        <strong>Instructions:</strong> {{ $order->instructions }}
@endisset

                    </div>
                    <br/>
                       <strong style="font-size: 30px;color:    #8A2BE2;text-align: center;">order received,We'll be there in two hours.</strong> 
                    <a class="btn btn-primary" href="/makeorder">Back to Orders</a>

                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div>
    </div>
</div>
@endsection
