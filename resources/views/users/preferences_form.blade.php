<div class="form-group">
    {!! Form::label('days_off', 'Days off', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('days_off[]', 
        ['Mo' => 'Monday', 'Tu' => 'Tuesday', 'We' => 'Wednesday', 'Th' => 'Thursday', 'Fr' => 'Friday'], 
        null, ['class' => 'form-control selectpicker', 'multiple']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('starting_time', 'Start Time', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6 bootstrap-timepicker timepicker">
        {!! Form::text('starting_time', null, ['class' => 'form-control input-small', 'id' => 'timepicker1']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('finishing_time', 'Finish Time', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('finishing_time', null, ['class' => 'form-control input-small', 'id' => 'timepicker2']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('course_load', 'Course Load', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::selectRange('course_load', 1, 6, 5, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-2 col-md-offset-8">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>