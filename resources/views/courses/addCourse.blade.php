@extends('layouts.app')

@section('extraCSS')
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/preferences/bootstrap-select.min.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Add a Course</div>
                <div class="panel-body">
					{!! Form::open(['url' => '/schedule/addCourse', 'class' => 'form-horizontal addCourse'])   !!}
						<input type="hidden" name="tutorialExists" value="0">
						<input type="hidden" name="labExists" value="0">
						<div class="form-group">
							<label for="semester" class="col-md-2 col-md-offset-2 control-label">Semester</label>
							<div class="col-md-6">
								<select id="semester" name="semester_id" class="form-control selectpicker" title="Please select a semester ...">
									@foreach($semesters as $semester)
										<option value="{{ $semester->semester_id }}">{{ $semester->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group course">
							<label for="course" class="col-md-2 col-md-offset-2 control-label">Course</label>
							<div class="col-md-6">
								<select id="course_code" name="course_id" class="form-control selectpicker" data-live-search="true" title="Please select a course ..." data-size="5">
								</select>
							</div>
						</div>
						<div class="form-group lecture">
							<label for="lecture" class="col-md-2 col-md-offset-2 control-label">Lecture</label>
							<div class="col-md-6">
								<select id="lec" name="lecture_id" class="form-control selectpicker" title="Please select a lecture ...">
								</select>
							</div>
						</div>
						<div class="form-group tutorial">
							<label for="tutorial" class="col-md-2 col-md-offset-2 control-label">Tutorial</label>
							<div class="col-md-6">
								<select id="tut" name="tutorial_id" class="form-control selectpicker" title="Please select a tutorial ...">
								</select>
							</div>
						</div>
						<div class="form-group lab">
							<label for="tutorial" class="col-md-2 col-md-offset-2 control-label">Lab</label>
							<div class="col-md-6">
								<select id="lab" name="lab_id" class="form-control selectpicker" title="Please select a lab ...">
								</select>
							</div>
						</div>
						<div class="form-group submitButton">
						    <div class="col-md-4 col-md-offset-8">
						        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
						    </div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extraJS')
	<script src="{{ asset('/js/preferences/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('/js/schedule/addCourse.js')}}"></script>
@endsection
