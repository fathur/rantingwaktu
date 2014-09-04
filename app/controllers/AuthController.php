<?php 

use Illuminate\Routing\Controller;

class AuthController extends Controller {

	public function __construct()
	{
		# code...
	}

	public function getLogin()
	{
		# code...
		return View::make('auth.login');
	}

	public function postLogin()
	{
		# code...
	}

	public function getRegister()
	{
		return View::make('auth.register');
	}

	public function postRegister()
	{
		# code...
	}

	public function getActivate($activationCode)
	{
		return View::make('auth.activate');
	}

	public function getForgot()
	{
		return View::make('auth.forgot');
	}

	public function postForgot()
	{
		# code...
	}

	public function getForgotConfirm($resetCode)
	{
		# code...
	}

	public function postForgotConfirm($resetCode)
	{
		# code...
	}

	public function getLogout()
	{
		return View::make('auth.logout');
	}
}