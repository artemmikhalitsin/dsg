@extends('layouts.app')

@section('extraCSS')
	<!-- Scheduler CSS -->
    <link href="/css/schedule/style.css" rel="stylesheet">

    <!-- Scheduler Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
@endsection

@section('content')
<div id="schedule-reset">
	<div id="schedule">
		<div class="cd-schedule loading">
			<div class="timeline">
				<ul>
					<li><span>09:00</span></li>
					<li><span>09:30</span></li>
					<li><span>10:00</span></li>
					<li><span>10:30</span></li>
					<li><span>11:00</span></li>
					<li><span>11:30</span></li>
					<li><span>12:00</span></li>
					<li><span>12:30</span></li>
					<li><span>13:00</span></li>
					<li><span>13:30</span></li>
					<li><span>14:00</span></li>
					<li><span>14:30</span></li>
					<li><span>15:00</span></li>
					<li><span>15:30</span></li>
					<li><span>16:00</span></li>
					<li><span>16:30</span></li>
					<li><span>17:00</span></li>
					<li><span>17:30</span></li>
					<li><span>18:00</span></li>
					<li><span>18:30</span></li>
					<li><span>19:00</span></li>
					<li><span>19:30</span></li>
					<li><span>20:00</span></li>
					<li><span>20:30</span></li>
					<li><span>21:00</span></li>
					<li><span>21:30</span></li>
					<li><span>22:00</span></li>
					<li><span>22:30</span></li>
				</ul>
			</div> <!-- .timeline -->

			<div class="events">
				<ul>
					<li class="events-group">
						<div class="top-info"><span>Monday</span></div>
						@foreach($schedule[0] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>

					<li class="events-group">
						<div class="top-info"><span>Tuesday</span></div>
						@foreach($schedule[1] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>

					<li class="events-group">
						<div class="top-info"><span>Wednesday</span></div>
						@foreach($schedule[2] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>

					<li class="events-group">
						<div class="top-info"><span>Thursday</span></div>
						@foreach($schedule[3] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>

					<li class="events-group">
						<div class="top-info"><span>Friday</span></div>
						@foreach($schedule[4] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>

					<li class="events-group">
						<div class="top-info"><span>Saturday</span></div>
						@foreach($schedule[5] as $timeslot)
						<ul>
							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot["type"]}}" data-event="event-1">
								<a href="#0">
									<em class="event-name">{{$timeslot["course_code"]}}<br>{{$timeslot["course_name"]}}</em>
								</a>
							</li>
						</ul>
						@endforeach
					</li>
				</ul>
			</div>

			<div class="event-modal">
				<header class="header">
					<div class="content">
						<span class="event-date"></span>
						<h3 class="event-name"></h3>
					</div>

					<div class="header-bg"></div>
				</header>

				<div class="body">
					<div class="event-info"></div>
					<div class="body-bg"></div>
				</div>

				<a href="#0" class="close">Close</a>
			</div>

			<div class="cover-layer"></div>
		</div> <!-- .cd-schedule -->
	</div>
</div>

@endsection

@section('extraJS')
<!-- Schedule JavaScript -->
<script src="/js/schedule/modernizr.js"></script>
<script>
	if(!window.jQuery){
		document.write(
	'<script src="/js/schedule/jquery-3.0.0.min.js"><\/script>)';
	}
</script>
<script src="/js/schedule/main.js"></script>
@endsection