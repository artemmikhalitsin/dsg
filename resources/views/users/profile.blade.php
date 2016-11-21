@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">User Profile</div>

                <div class="panel-body">
                  <b>  NAME </b><br>
                    <span contenteditable="">{{ $user->name}}</span> <br> <br>
                    <b> PROGRAM <br> </b>
                    <span contenteditable="">{{ $user->program->program_name}}</span>  <br> <br>
                    <b> EMAIL <br> </b>
                    <span contenteditable="">{{ $user->email}}</span> <br><br>
                    <a href="#">Change your profile</a>

                </div>

            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">Completed Courses</div>
              <div class="panel-body">
                    @foreach($completedCourses as $course)
                        <button type="button" class="btn btn-success">{{ $course->course_code }}</button>
                    @endforeach
              </div>
              <div class="panel-body">
              <a href="{{ url('/addCompletedCourses') }}">Add completed courses</a>
               </div>

        </div>
    </div>
</div>
</div>
@endsection
