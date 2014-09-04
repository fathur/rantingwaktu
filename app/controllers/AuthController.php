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
		return "a";
	}

	public function postLogin()
	{
		# code...
	}

	public function getRegister()
	{
		# code...
	}

	public function postRegister()
	{
		# code...
	}

	public function getActivate($activationCode)
	{
		# code...
	}

	public function getForgot()
	{
		# code...
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
		# code...
	}
}