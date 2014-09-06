<?php 

use Illuminate\Routing\Controller;

/**
 * @author https://github.com/brunogaspar/laravel4-starter-kit/blob/master/app/controllers/AuthController.php
 * 
 **/

class AuthController extends Controller {

	public function __construct()
	{
		# code...
	}

	public function getLogin()
	{
		// Melakukan check apakah telah login atau belum.
		// Jika belum login maka menampilkan halaman login.
		// Jika sudah maka redirect ke ...
		if (! Sentry::check() ) {
			
			return View::make('auth.login');

		} else {
			return Redirect::route('home', 'parameters', 'status', 'headers');
		}
	}

	public function postLogin()
	{
		// Declare the rules for the form validation
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required|min:7',
		);

		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}

		try
		{
			// Try to log the user in
			Sentry::authenticate(Input::only('email', 'password'), Input::get('remember-me', 0));

			// Get the page we were before
			$redirect = Session::get('loginRedirect', 'account');

			// Unset the page we were before from the session
			Session::forget('loginRedirect');

			// Redirect to the users page
			return Redirect::to($redirect)->with('success', Lang::get('auth/message.signin.success'));
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			$this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			$this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
		}
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			$this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			$this->messageBag->add('email', Lang::get('auth/message.account_banned'));
		}

		// Ooops.. something went wrong
		return Redirect::back()->withInput()->withErrors($this->messageBag);
	}

	public function getRegister()
	{
		return View::make('auth.register');
		/*try 
		{
			Sentry::createUser([
				'email'=>'akungbgl@gmail.com',
				'password'=>'plokijuh',
				'activated'=>true
			]);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
			return 'User with this login already exists.';
		}*/
	}

	public function postRegister()
	{
		$validator = Validator::make( [
			'email'				=> Input::get('email'),
			'password'			=> Input::get('sandi'),
			'password-confirm'	=> Input::get('sandi-konfirmasi')
		], [
			'email'				=> 'required|email|',
			'password'			=> 'required|min:7',
			'password-confirm'	=> 'required|min:7|same:password'
		]);

		if ($validator->fails()) {
			# fail code here
			$messages = $validator->messages();
			return $messages;
		}

		// Jika validation berhasil maka langsung ke blok try exception berikut
		try {
			
			$user = Sentry::register(array(
				'email' 	=> Input::get('email'),
				'password'  => Input::get('sandi')
			));

			$activationCode = $user->getActivationCode();

			Mail::send('emails.auth.register', [
				'activationURI'	=> URL::route('auth.activate', $activationCode)
			], 
			function ($message) use ($user)
			{
				$message->to( $user->email );
				$message->subject( 'Welcome to Ranting Waktu' );
			});

		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
			return 'User with this login already exists.';
		}
	}

	public function getActivate($activationCode)
	{
		//return View::make('auth.activate');
		if (Sentry::check()) {
			# Jika user login maka halaman ini tidak bisa dipakai
			return Redirect::route('home');
		}

		try {
			
			$user = Sentry::getUserProvider()->findByActivationCode( $activationCode );

			if ($user->attemptActivation( $activationCode ))
			{
				Mail::send('emails.auth.activated', [], function ($message) use ($user)
				{
					$message->to( $user->email );
					$message->subject( 'Aktifasi akun Anda berhasil' );
				});

				return View::make('auth.login');
			}
			else
			{
				// User activation failed
				return "activation fail";
			}
		} 
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    return 'User was not found.';
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
		    return 'User is already activated.';
		}
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
		Sentry::logout();
	}
}