@extends('layouts.master')

@section('css')
<style type="text/css">
	body {
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #eee;
	}

	.form-signin {
	  max-width: 330px;
	  padding: 15px;
	  margin: 0 auto;
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
	  margin-bottom: 10px;
	}
	.form-signin .checkbox {
	  font-weight: normal;
	}
	.form-signin .form-control {
	  position: relative;
	  height: auto;
	  -webkit-box-sizing: border-box;
	     -moz-box-sizing: border-box;
	          box-sizing: border-box;
	  padding: 10px;
	  font-size: 16px;
	}
	.form-signin .form-control:focus {
	  z-index: 2;
	}
	.form-signin input[type="email"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
</style>
@stop

@section('content')
{{Form::open(['route' => 'auth.login.check', 'role' => 'form', 'class' => 'form-signin'])}}
	<h2 class="form-signin-heading">Please sign in</h2>
	
	{{Form::email('email', '', [
		'class'=>'form-control',
		'placeholder'=>'Email Address',
		'required'=>'required',
		'autofocus'=>'autofocus'
	])}}

	{{Form::password('password', [
		'class'=>'form-control',
		'placeholder'=>'Password',
		'required'=>'required'
	])}}
	
	<label class="checkbox">
		{{Form::checkbox('remember', 'remember-me', false)}} Remember Me
	</label>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
{{Form::close()}}
@stop