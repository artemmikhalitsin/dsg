@extends('layouts.app')

@section('extraCSS')
	<!-- Scheduler CSS -->
    <link href="/css/schedule/style.css" rel="stylesheet">

    <!-- Scheduler Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
@endsection

@section('content')

<<<<<<< Updated upstream
=======

<td class="post">
  <div class="panel-body">
    <div id="wrapper">
           <div id="page-wrapper">
               <div class="row">
                   <div class="col-md-10 col-md-offset-1">
                       <div class="panel panel-primary">
                           <div class="panel-heading" id="add-course">
                               Add course to schedule
                           </div>
                           <!-- /.panel-heading -->
                           <div class="panel-body" id="answer1" style="display:none;">
                               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead>
                                       <tr>
                                           <th>Code</th>
                                           <th>Name</th>
                                           <th>Type</th>
                                           <th>Credits</th>
                                           <th>Option</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    @foreach($courses as $course)
                                       <tr class="odd gradeX" id="classrow-{{$course->course_id}}">
                                           <td>{{ $course->course_code }}</td>
                                           <td>{{ $course->course_name }}</td>
                                           <td>{{ $course->course_type }}</td>
                                           <td style="text-align: center;">{{ $course->credits }}</td>
                                           <td style="text-align: center;">
                                            <button class="btn btn-primary btn-xs add-course" value="{{$course->course_id}}">
                                            <span class="glyphicon glyphicon-plus"></span> Add</button>
                                           </td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                               <!-- /.table-responsive -->
                           </div>
                           <!-- /.panel-body -->
                       </div>
                       <!-- /.panel -->
                   </div>
                   <!-- /.col-lg-12 -->
               </div>
               <!--/.row-->

</td>
>>>>>>> Stashed changes
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Your Schedule</div>

                <div class="panel-body">
                    <div id="schedule-reset">
                    	<div id="schedule">
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
                    						@foreach($schedule[0] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot['start_time']}}" data-end="{{$timeslot['end_time']}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot['type']}}">
                    								<a href="#0">
                    									<em class="event-name">{{$timeslot["course_code"]}} <br>{{$timeslot["course_name"]}}"</em>
                    								</a>
                    							</li>
                    						@endforeach
                                                  </ul>
                    					</li>

                    					<li class="events-group">
                    						<div class="top-info"><span>Tuesday</span></div>
                                                  <ul>
                    						@foreach($schedule[1] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot['start_time']}}" data-end="{{$timeslot['end_time']}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot['type']}}">
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
                                                       @foreach($schedule[2] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}">
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
                                                       @foreach($schedule[3] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}">
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
                                                       @foreach($schedule[4] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}">
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
                                                       @foreach($schedule[5] as $timeslot)
                    							<li class="single-event" data-start="{{$timeslot["start_time"]}}" data-end="{{$timeslot["end_time"]}}" data-content="{{$timeslot['id']}}" data-event="{{$timeslot["type"]}}">
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
</script>
<script src="/js/schedule/main.js"></script>
<script src="/js/dataTables/jquery.dataTables.min.js"></script>
<script src="/js/dataTables/dataTables.bootstrap.min.js"></script>
<script src="/js/dataTables/dataTables.responsive.js"></script>

<script>

 $(document).ready(function() {
       var table = $('#dataTables-example').DataTable({
           responsive: true
      });

      $('#add-course').on('click', function(){
          var elem = $('#answer1');
          if(elem.css('display') == 'none')
          {
               elem.css('display','block');
          }
          else
          {
               elem.css('display','none');
          }
      })

      $('#dataTables-example tbody').on('click', 'td button', function(){
         var course_id = $(this).val();

           $.ajax({
               url: '/completedCourses',
               type: 'POST',
               data: {
                    course_id: course_id
               },
               success: function (data) {
                   console.log(data);
                   if(data['response'] == true)
                   {
                        var row = document.getElementById('classrow-'+course_id);
                        $('#dataTables-example').DataTable()
                                                   .row(row)
                                                   .remove()
                                                   .draw(false);
                   }
                }
           });
      });
});

</script>
@endsection
