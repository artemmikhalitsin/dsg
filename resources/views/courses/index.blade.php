@extends('layouts.app');

@section('content');
	<h1>Courses</h1>
	@foreach ($courses as $course)
		<article>
			<h2>{{ $course->course_code }} : {{ $course->course_name }} </h2>

			<div class="body" style="width: 50%;"> {{ $course->description }} </div>
		</article>
	@endforeach
@endsection