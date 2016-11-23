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

					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('add.png') }}}"></a>
						<a href="{{ url('/login') }}" text-decoration="none"><div class="desc">MANAGE COMPLETED COURSES</div></a>
					</div>

					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('pref.png') }}}"></a>
						<a href="{{ url('/#') }}"><div class="desc">MANAGE PREFERENCES</div></a>
					</div>

					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('list.png') }}}"></a>
						<a href="{{ url('/#') }}"><div class="desc">BROWSE COURSES</div></a>
					</div>

					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('profile.png') }}}"></a>
						<a href="{{ url('/login') }}"><div class="desc">MANAGE PROFILE</div></a>
					</div>

					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('sequence.png') }}}"></a>
						<a href="{{ url('/login') }}"><div class="desc">GENERATE SEQUENCE</div></a>
					</div>



					<div class="img">
						<a href="{{ url('/login') }}"><img src="{{{ asset('schedule.png') }}}"></a>
						<a href="{{ url('/login') }}"><div class="desc">GENERATE SCHEDULE</div></a>
					</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
