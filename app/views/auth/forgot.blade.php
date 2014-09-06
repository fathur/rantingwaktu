@extends('layouts.master')

@section('content')
{{Form::open([
	'route'	=> 'auth.forgot.check',
	'role'	=> 'form'
])}}

	<div class="form-group">
		{{Form::label('email','Email')}}
		{{Form::email('email', '', [
			'class'=>'form-control',
			'placeholder'=>'Email Address',
			'required'=>'required',
			'autofocus'=>'autofocus'
		])}}
	</div>

	{{Form::submit('Send Forgot Credential', ['class'=>'btn btn-primary'])}}

{{Form::close()}}
@stop