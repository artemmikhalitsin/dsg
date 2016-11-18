@extends('layouts.app')

@section('content')
{!!  Form::open()   !!}

  {!! Form::label('startTime', 'Start Time:') !!}
  {!! Form::text('startTime', 'NEVER') !!}

  {!! Form::label('endTime', 'End Time:') !!}
  {!! Form::select('size', array('L' => 'Large', 'S' => 'Small')); !!}

  {!! Form::label('courseLoad', 'Desired Course Load:') !!}
  {!! Form::text('courseLoad') !!}



{!! Form::close() !!}
@endsection
