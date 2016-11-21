@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                  <b>  NAME <br> </b>
                    {{ $user->name}} <br> <br>
                    <b> PROGRAM <br> </b>
                    {{ $user->program_id}}  <br> <br>
                    <b> EMAIL <br> </b>
                    {{ $user->email}} <br><br>
                    <a href="#">Change your profile</a>

                </div>

            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">Completed Courses</div>
              <div class="panel-body">
                   <!--Here we'll put a php code that will go through courses-->
              </div>
              <div class="panel-body">
              <a href="{{ url('/addCompletedCourses') }}">Add completed courses</a>
               </div>

        </div>
    </div>
</div>
@endsection
