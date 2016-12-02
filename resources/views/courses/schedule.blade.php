@extends('layouts.app')

@section('extraCSS')
	<!-- Scheduler CSS -->
    <link href="/css/schedule/style.css" rel="stylesheet">

    <!-- Scheduler Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">

    <!--Bootstrap Selector-->
    <link rel="stylesheet" href="{{ asset('/css/preferences/bootstrap-select.min.css') }}">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Your Schedule</div>

                <div class="panel-body">
                      <div class="form-group">
                        <div class="cold-md-10">
                          {!! Form::open(['url'=> 'schedule/addCourse', 'method'=>'get', 'id'=> 'addCourse-form']) !!}
                          {!! Form::button('<i class="fa fa-calendar-plus-o fa-lg" aria-hidden="true"></i> Add courses to the schedule', ['id' => 'addCourse-button', 'class' => '"btn btn-success btn-lg']) !!}
                          {!! Form::close() !!}
                          <br>
                           <select id="semester" name="semester_id" class="form-control selectpicker" title="Please select a semester ...">
                                @foreach($semesters as $semester)
                                     <option value="{{ $semester->semester_id }}">{{ $semester->name }}</option>
                                @endforeach
                           </select>
                        </div>
                      </div>
                    @foreach($semesters as $semester)
                    <div id="schedule-reset">
                    	<div id="schedule" semester-id="{{$semester->semester_id}}">
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
                                                  <ul>
                    						@foreach($schedule[$semester->semester_id][0] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot['start_time']}}" data-end="{{$timeslot['end_time']}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot['type']}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                    						@endforeach
                                                  </ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Tuesday</span></div>
                                                  <ul>
                    						@foreach($schedule[$semester->semester_id][1] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot['start_time']}}" data-end="{{$timeslot['end_time']}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot['type']}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                    						@endforeach
                                                  </ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Wednesday</span></div>
                    						<ul>
                                                       @foreach($schedule[$semester->semester_id][2] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                                                       @endforeach
                    						</ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Thursday</span></div>
                    						<ul>
                                                       @foreach($schedule[$semester->semester_id][3] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                                                       @endforeach
                    						</ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Friday</span></div>
                    						<ul>
                                                       @foreach($schedule[$semester->semester_id][4] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                                                       @endforeach
                    						</ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Saturday</span></div>
                    						<ul>
                                                       @foreach($schedule[$semester->semester_id][5] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}" data-code="{{$timeslot['course_code']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}</em>
                    								</a>
                    							</li>
                                                       @endforeach
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
                    	</div>
                    </div>
                    @endforeach
                    <!--schedule end-->
               </div>
          </div>
     </div>
     </div>
</div>

@endsection

@section('extraJS')
<!-- Schedule JavaScript -->
<script src="/js/schedule/modernizr.js"></script>
<script>
	if(!window.jQuery){
		document.write(
	'<script src="/js/schedule/jquery-3.0.0.min.js"><\/script>');
	}

    $(document).ready(function() {
         $("div[semester-id]").hide();

         $('#semester').on('change', function(){
              var semester_id = $(this).val();
              $("div[semester-id]").hide();
              $("div[semester-id=" + semester_id + "]").show();
        })

        $('#addCourse-button').on('click', function()
        {
             $('#addCourse-form').submit();
        });

         $('.event-modal').on('click', '#modal-delete-button', function(){

              var course_id = $(this).attr("course-id");
              console.log(course_id);
              $.ajax({
                  url: '/schedule/removeCourse',
                  type: 'POST',
                  data: {
                       course_id: course_id
                  },
                  success: function (data) {
                     console.log(data);
                     return window.location.replace('/schedule');
                   }
              });
         });
   });
</script>
<script src="/js/schedule/main.js"></script>
<script src="/js/dataTables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/preferences/bootstrap-select.min.js') }}"></script>
@endsection
