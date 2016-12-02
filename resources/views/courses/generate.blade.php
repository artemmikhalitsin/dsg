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
        <div class="panel-heading">Generate Schedule</div>

        <div class="panel-body">
          <div class="form-group">
            <div class="cold-md-10" style="text-align: center;">
              <div style="display: inline-block; margin: auto;">
                {!! Form::open(['url'=> 'schedule/picked', 'method'=>'get', 'id'=> 'addCourse-form']) !!}
                <select id="semester" name="semester_id" class="form-control selectpicker" title="Please select a semester ...">
                @foreach($semesters as $semester)
                <option value="{{ $semester->semester_id }}">{{ $semester->name }}</option>
                @endforeach
                </select>
                <br>
                <br>
                WARNING THIS WILL DELETE YOUR EXISTING SCHEDULE. <br><i>- Rteam the Salacious Sage</i>
                <br>
                {!! Form::button('<i class="fa fa-calendar-plus-o fa-lg" aria-hidden="true"></i> Generate Schedule', ['id' => 'addCourse-button', 'class' => '"btn btn-success btn-lg']) !!}
                {!! Form::close() !!}
                <br>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
                 <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

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

   $('#addCourse-button').on('click', function()
   {
     $('#addCourse-form').submit();
   });
 });
</script>
<script src="/js/schedule/main.js"></script>
<script src="/js/dataTables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/preferences/bootstrap-select.min.js') }}"></script>
@endsection
