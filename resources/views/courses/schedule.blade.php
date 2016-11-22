<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<link rel="stylesheet" href="css/schedule/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/schedule/style.css"> <!-- Resource style -->
  	
	<title>Schedule Template | CodyHouse</title>
</head>
<body>
@if(!empty($schedule))
	{{ implode("|",$schedule[0]) }}
@endif
<div class="cd-schedule loading">
	<div class="timeline">
		<ul>
			<li><span>08:00</span></li>
			<li><span>08:30</span></li>
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
		</ul>
	</div> <!-- .timeline -->

	<div class="events">
		<ul>
			<li class="events-group">
				<div class="top-info"><span>Monday</span></div>

				<ul>
					@foreach($schedule[0] as $course)
					<li class="single-event" data-start="{{ $course['start_time'] }}" data-end="{{ $course['end_time'] }}" data-content="event-abs-circuit" data-event="event-1">
						<a href="#0">
							<em class="event-name">{{ $course['course_code']}}</br>{{ $course['course_name'] }} ({{$course['type']}})</em>
						</a>
					</li>
					@endforeach
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Tuesday</span></div>

				<ul>
					
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Wednesday</span></div>

				<ul>
					
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Thursday</span></div>

				<ul>
					
				</ul>
			</li>

			<li class="events-group">
				<div class="top-info"><span>Friday</span></div>

				<ul>
					
				</ul>
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
<script src="js/schedule/modernizr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/schedule/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/schedule/main.js"></script> <!-- Resource jQuery -->
</body>
</html>