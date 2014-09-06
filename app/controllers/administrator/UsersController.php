<?php namespace Controllers\Administrator;

use Illuminate\Routing\Controller;

use Input;
use Sentry;
use View;

class UsersController extends Controller {

	public function getIndex()
	{
		$users = Sentry::getUserProvider()->createModel();

		if (Input::get('withTrashed')) {
			
			$users = $users->withTrashed();

		} elseif (Input::get('onlyTrashed')) {
			
			$users = $users->onlyTrashed();
		}

		$users = $users->paginate()
			->appends([
				'withTrashed'	=> Input::get('withTrashed'),
				'onlyTrashed'	=> Input::get('onlyTrashed')
			]);

		return View::make('administrator.users.all', compact('users'));
	}

	public function getCreate()
	{

	}

	public function postCreate()
	{
		# code...
	}

	public function getShow($username)
	{
		# code...
	}

	public function getEdit($username)
	{
		# code...
	}

	public function putUser($username)
	{
		# code...
	}

	public function deleteUser($username)
	{
		# code...
	}
}