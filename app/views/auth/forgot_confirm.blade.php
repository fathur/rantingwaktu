@extends('layouts.master')

@section('content')
{{Form::open([
	'route'	=> ['auth.forgot.renew', $resetCode ],
	'role'	=> 'form'
])}}

	<div class="form-group">
		{{Form::label('sandi','Password')}}
		{{Form::password('sandi', [
			'class'=>'form-control',
			'placeholder'=>'Password',
			'required'=>'required'
		])}}
	</div>

	<div class="form-group">
		{{Form::label('sandi-konfirmasi','Password Confirm')}} 
		{{Form::password('sandi-konfirmasi', [
			'class'=>'form-control',
			'placeholder'=>'Password Confirm',
			'required'=>'required'
		])}}
	</div>

	{{Form::submit('Send Forgot Credential', ['class'=>'btn btn-primary'])}}

{{Form::close()}}
@stop