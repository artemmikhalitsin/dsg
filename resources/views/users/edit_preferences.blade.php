@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Preferences</div>
                <div class="panel-body">
				{!!  Form::model([$preferences, 'url' => '', 'method' => 'PATCH', class' => 'form-horizontal'])   !!}
					@include('users.preferences_form')
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
