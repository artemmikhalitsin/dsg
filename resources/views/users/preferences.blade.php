@extends('layouts.app')

@section('content')

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading">Preferences</div>
<div class="panel-body">
{!!  Form::open()   !!}

  {!! Form::label('startTime', 'Start Time:') !!}<br>
  {!! Form::time('startTime', 'NEVER') !!}
<br><br>
  {!! Form::label('endTime', 'End Time:') !!}<br>
  {!! Form::time('startTime', 'NEVER') !!}
<br><br>
  {!! Form::label('courseLoad', 'Desired Course Load:') !!}<br>
  {!! Form::select('size', array('1' => '1 course', '2' => '2 courses', '3' => '3 courses', '4' => '4 courses', '5' => '5 courses', '6' => '6 courses')); !!}

{!! Form::close() !!}
</div>
</div>
</div>
@endsection
