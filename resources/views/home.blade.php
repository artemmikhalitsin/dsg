@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    You are now logged in! <br><br><br>
					@include('partialLinks')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
