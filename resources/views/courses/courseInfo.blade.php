<div class="course-info">
<p title="course_info" style="padding:10pt;">{{$course->course_code}} {{$course->course_name}}<br>{{$sectiontype}} ({{$section->section}}) <br></p>
<p title="section_description" style="padding:10pt;">{{$course->description}}<br></p>
<ul title="section_info" style="padding:10pt;">
     @if($section->instructor_name != null)
          <li>Instructor: {{$section->instructor_name}}</li>
     @endif
     <li>Room: {{$section->place}}</li>
</ul>
<div id="modal-delete-button" course-id="{{$course->course_id}}"></div>
</div>
