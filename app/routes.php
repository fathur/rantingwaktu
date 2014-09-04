<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('Topics', 
[
	'as'=>'topic.all',

	function ()
	{
		# code...
	}
]);


Route::post('Topic', 
[
	'as'=>'topic.save',

	function ()
	{
		# code...
	}
]);

Route::put('Topic:{topic_id}', ['as'=>'topic.update', function ()
{
	# code...
}]);

Route::delete('Topic:{topic_id}', ['as'=>'topic.delete', function ()
{
	# code...
}]);

Route::get('Topic:{topic_slug}', 
[
	'as'=>'topic.slug',

	function($topic_slug)
	{

	}
]);

Route::get('Topic:{topic_slug}/Branch:{branch_slug}', 
[
	'as'=>'topic.branch',

	function ($topic_slug, $branch_slug)
	{
		# code...
	}
]);

Route::get('Topic:{topic_slug}/Post:{post_slug}', 
[
	'as'=>'post.slug', 

	function ($topic_slug, $post_slug)
	{
		# code...
	}
]);



Route::get('Bibliographies', 
[
	'as'=>'bibliography.all', 

	function ()
	{
		# code...
	}
]);


Route::get('Topic:{topic_slug}/Bibliographies', 
[
	'as'=>'bibliography.topic', 

	function ($topic_slug)
	{
		# code...
	}
]);

Route::get('Post:{post_slug}/Bibliographies', 
[
	'as'=>'bibliography.post', 

	function ($post_slug)
	{
		# code...
	}
]);

Route::get('Bibliography:{bibliography_id}', 
[
	'as'=>'bibliography.detail', 

	function ($bibliography_id)
	{
		# code...
	}
]);



Route::get('Search', 
[
	'as'=>'search', 

	function ()
	{
		# code...
	}
]);
/*
Route::get('{username}', 
[
	'as'=>'member.home',

	function ()
	{
		# code...
	}
]);


Route::get('{username}/Topics', 
[
	'as'=>'member.topic', 

	function ()
	{
		# code...
	}	
]);*/

/**
 * =============================================
 * 				Authentication routes
 * =============================================
 *
 * Routes below use `AuthenticationController`.
 *
 */
Route::get('Login', [
	'as'=>'auth.login', 
	'uses'=>'AuthController@getLogin']);

Route::post('Login', [
	'as'=>'auth.login.check', 
	'uses'=>'AuthController@postLogin']);

Route::get('Register', [
	'as'=>'auth.register', 
	'uses'=>'AuthController@getRegister']);

Route::post('Register', [
	'as'=>'auth.register.save', 
	'uses'=>'AuthController@postRegister']);

Route::get('Activate:{activation_code}', [
	'as'=>'auth.activete', 
	'uses'=>'AuthController@getActivate']);

Route::get('Forgot', [
	'as'=>'auth.forgot', 
	'uses'=>'AuthController@getForgot']);

Route::post('Forgot', [
	'as'=>'auth.forgot.check', 
	'uses'=>'AuthController@postForgot']);

Route::get('Forgot:{reset_code}', [
	'as'=>'auth.forgot.confirm', 
	'uses'=>'AuthController@getForgotConfirm']);

Route::post('Forgot:{reset_code}', 'AuthController@postForgotConfirm');

Route::get('Logout', [
	'as'=>'auth.logout', 
	'uses'=>'AuthController@getLogout']);