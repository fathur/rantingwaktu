@extends('layouts.master')

@section('content')
{{Form::open([
	'route'	=> 'auth.register.save',
	'role'	=> 'form'
])}}

	<div class="form-group">
		{{Form::label('email')}}
		{{Form::email('email', '', [
			'class'=>'form-control',
			'placeholder'=>'Email Address',
			'required'=>'required',
			'autofocus'=>'autofocus'
		])}}
	</div>

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

	{{Form::submit('Register', ['class'=>'btn btn-primary'])}}	

{{Form::close()}}
@stop
