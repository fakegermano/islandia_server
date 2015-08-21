<?php

class AdminController extends \BaseController {

	/**
	 * Function that shows the login screen
	 *
	 * @return \Illuminate\View\View
	 */
	public function showLogin()
	{
		//only if no user is logged in!
		if (Auth::guest())
		{
			return View::make('login');
		}
		else {
			return Redirect::to('list');
		}
	}

	/**
	 * Function that logs the user in
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function doLogin()
	{
		// Input rules
		$rules = [
			'email'    => 'required|email', // checking if it is a valid email
			'password' => 'required|alphaNum|min:6' // checking if it is a valid password
		];

		// Validating the input
		$validator = Validator::make(Input::all(), $rules);

		// If failed, redirect back
		if ($validator->fails())
		{
			return Redirect::to('login')
				->withErrors($validator)// sending the errors
				->withInput(Input::except('password')); // sending the data, without password
		}
		else
		{

			// Let's check the data against the database!

			// First, we'll format it
			$loginData = [
				'email'    => Input::get('email'),
				'password' => Input::get('password')
			];

			// Then, we'll test it
			if (Auth::attempt($loginData))
			{
				// In case of success...
				return Redirect::to('admin');
			}
			else
			{
				//Error!
				return Redirect::to('login')->with('loginError', 'Usuário ou senha inválidos');
			}

		}
	}

	/**
	 * Function that logs a user out
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function doLogout()
	{
		// Check if we REALLY have a logged in user
		if (Auth::user())
		{
			Auth::logout(); // If so, we log the user out
			return Redirect::route('home'); // redirect the user to the login screen
		}
		else
		{
			return Redirect::to('home');
		}
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
    {
        if(Auth::user())
        {
    		$posts = Post::orderBy('id')->get();

	    	return View::make('admin.admindex')->with(['posts' => $posts]);
        }
        else
        {
            return Redirect::route('login');
        }
	}

	public function blockReply($id)
	{
		Reply::findOrFail($id)->delete();

		return Redirect::to('admin');
	}

	public function blockComment($id)
	{
		Comment::findOrFail($id)->delete();

		return Redirect::to('admin');
	}

	public function listRepliesForBlock($id)
	{
		$post = Post::findOrFail($id);

		return View::make('admin.adminblock')->with(['post' => $post]);
	}

	public function createReport($id)
	{
		$post = Post::findOrFail($id);

		return View::make('admin.admingeneratereport')->with(['post' => $post]);
	}

	public function viewReport($id)
	{
		$post = Post::findOrFail($id);

		return View::make('admin.report')->with(['post' => $post]);
	}
}
