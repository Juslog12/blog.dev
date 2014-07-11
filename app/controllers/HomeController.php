<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

		
	public function showLogin() 
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
    		return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or password not found.');
    		return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}



	public function showResume()
	{
		$posts = Post::with('user')->paginate(4);
		return View::make('posts.index')->with(array('posts' => $posts));
	}

	

	public function showPortfolio()
	{
		$posts = Post::with('user')->paginate(4);
		return View::make('pages.portfolio')->with(array('posts' => $posts));
	}

	
}
