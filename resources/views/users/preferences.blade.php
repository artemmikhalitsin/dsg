@extends('layouts.app')

@section('extraCSS')
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="/css/preferences/bootstrap-timepicker.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Preferences</div>
                <div class="panel-body">
				{!!  Form::open(['url' => 'preferences', 'class' => 'form-horizontal'])   !!}
					@include('users.preferences_form')
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('extraJS')
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.min.js"></script>
	<script src="/js/preferences/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript">
        $('#timepicker1').timepicker();
        $('#timepicker2').timepicker();
    </script>
@endsection
