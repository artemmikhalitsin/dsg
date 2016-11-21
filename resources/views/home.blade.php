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
						<div class="desc">ADD COMPLETED COURSES</div>
					@endif
					</div>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/preferences') }}"><img src="{{{ asset('pref.png') }}}"></a>
						<div class="desc">ADD PREFERENCES</div>
					@endif
					</div>
					
					<div class="img">
					<a href="{{ url('/#') }}"><img src="{{{ asset('list.png') }}}"></a>
						<div class="desc">BROWSE COURSES</div>
					</div>
					
					<div class="img">
					@if (!Auth::guest())
						<a href="{{ url('/profile') }}"><img src="{{{ asset('profile.png') }}}"></a>
						<div class="desc">VIEW PROFILE</div>
					@endif
					</div>
					
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
