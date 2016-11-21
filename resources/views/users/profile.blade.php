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
                    <b> DEPARTMENT <br> </b>
                    {{ $user->program_id}}  <br> <br>
                    <b> EMAIL <br> </b>
                    {{ $user->email}} <br><br>

                </div>

            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">Completed Courses</div>
              <div class="panel-body">
                    @foreach($completedCourses as $course)
                        <button type="button" class="btn btn-success">{{ $course->course_code }}</button></br></br>
                    @endforeach
              </div>

        </div>
    </div>
</div>
@endsection
