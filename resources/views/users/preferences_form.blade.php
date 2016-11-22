<div class="form-group">
    {!! Form::label('day_off', 'Day off', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('day_off', 
        ['No' => 'None', 'Mo' => 'Monday', 'Tu' => 'Tuesday', 'We' => 'Wednesday', 'Th' => 'Thursday', 'Fr' => 'Friday'], 
        null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('starting_time', 'Starting Time', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('starting_time', array('none1' => 'Anytime', '8:45AM' => '8:45AM', '10:15AM' => '10:15AM'), null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('finishing_time', 'Finishing Time', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('finishing_time', array('none2' => 'Anytime', '4:00PM' => '4:00PM', '5:30PM' => '5:30PM'), null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('course_load', 'Course Load', ['class' => 'col-md-2 col-md-offset-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::selectRange('course_load', 1, 5, 5, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-2 col-md-offset-8">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>