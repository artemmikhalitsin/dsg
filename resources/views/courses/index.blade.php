@extends('layouts.app')

@section('content')
	@if (!empty($courses))
		<h1>Courses in your program</h1>
	@endif
	@foreach ($courses as $course)
		<article>
			<h2>{{ $course->course_code }} : {{ $course->course_name }} </h2>

			<div class="body" style="width: 50%;"> {{ $course->description }} </div>
		</article>	
	@endforeach

	@if (!empty($electives))
		<h1>Electives in your program</h1>
	@endif
	@foreach ($electives as $elective)
		<article>
			<h2>{{ $elective->course_code }} : {{ $elective->course_name }} </h2>

			<div class="body" style="width: 50%;"> {{ $elective->description }} </div>
		</article>	
	@endforeach
@endsection