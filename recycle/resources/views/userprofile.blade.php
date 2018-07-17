@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h1>my profile :</h1>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                 username: {{ Auth::user()->name }}    <br>
                 email: {{ Auth::user()->email }}<br>

                 email: {{ Auth::user()->phone}}<br>
                 email: {{ Auth::user()->city }}<br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
