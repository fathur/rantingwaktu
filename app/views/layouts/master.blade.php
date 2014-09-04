<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		{{HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
		<style>
		body {
			padding-top: 50px;
			padding-bottom: 20px;
		}
		</style>
		{{HTML::style('packages/bootstrap/css/bootstrap-theme.min.css')}}
		{{HTML::style('styles/main.css')}}

		{{HTML::script('packages/components/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Project name</a>
		</div>
		<div class="navbar-collapse collapse">
		<form class="navbar-form navbar-right" role="form">
		<div class="form-group">
		<input type="text" placeholder="Email" class="form-control">
		</div>
		<div class="form-group">
		<input type="password" placeholder="Password" class="form-control">
		</div>
		<button type="submit" class="btn btn-success">Sign in</button>
		</form>
		</div><!--/.navbar-collapse -->
		</div>
		</div>

		@yield('content')

		{{HTML::script('packages/components/jquery/jquery.min.js')}}
		<script>window.jQuery || document.write("/packages/components/jquery/jquery.min.js")</script>

		{{HTML::script('packages/bootstrap/js/bootstrap.min.js')}}
		{{HTML::script('scripts/plugins.js')}}
		{{HTML::script('scripts/main.js')}}

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X');ga('send','pageview');
		</script>
	</body>
</html>
