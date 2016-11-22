@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    You are now logged in! <br><br><br>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/addCompletedCourses') }}"><img src="{{{ asset('add.png') }}}"></a>
						<a href="{{ url('/addCompletedCourses') }}" text-decoration="none"><div class="desc">ADD COMPLETED COURSES</div></a>
					@endif
					</div>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/preferences') }}"><img src="{{{ asset('pref.png') }}}"></a>
						<a href="{{ url('/preferences') }}"><div class="desc">ADD PREFERENCES</div></a>
					@endif
					</div>
					
					<div class="img">
						<a href="{{ url('/#') }}"><img src="{{{ asset('list.png') }}}"></a>
						<a href="{{ url('/#') }}"><div class="desc">BROWSE COURSES</div></a>
					</div>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/profile') }}"><img src="{{{ asset('profile.png') }}}"></a>
						<a href="{{ url('/profile') }}"><div class="desc">VIEW PROFILE</div></a>
					@endif
					</div>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/sequence') }}"><img src="{{{ asset('sequence.png') }}}"></a>
						<a href="{{ url('/sequence') }}"><div class="desc">GENERATE SEQUENCE</div></a>
					@endif
					</div>
					
					
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/#') }}"><img src="{{{ asset('schedule.png') }}}"></a>
						<a href="{{ url('/#') }}"><div class="desc">GENERATE SCHEDULE</div></a>
					@endif
					</div>
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
