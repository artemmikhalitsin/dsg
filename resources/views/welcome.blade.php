@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Please login to start schedulling your university life today!
                    <br>  <a href="{{ url('/register')}}"> Sign up now!</a>
                    <br>    <br>
                    You can:<br>
					@include('partialLinks')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
