<?php

class PostsController extends \BaseController {
	
	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		if(Input::has('search'))
		{
			$search = Input::get('search');
			$posts = Post::with('user')->where('title', "LIKE", "%$search%")->orderBy('created_at', 'DESC')->paginate(4);	
		}
		else
		{
	 		$posts = Post::with('user')->orderBy('created_at', 'DESC')->paginate(4);
 		}

 		return View::make('posts.index')->with(array('posts' => $posts));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{	
		//Log::info('Someone is trying to create a post.');
		return View::make('posts.create-edit');
	}	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'There was an error. Please complete title and body fields.');
	       	return Redirect::back()->withInput()->withErrors($validator); 
	    }
	    else
	    {
		    $post = new Post();

			$post->user()->associate(Auth::user());

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->slug = '';
			$post->save();
			if (Input::hasFile('image') && Input::file('image')->isValid())
			{
			    $post->addUploadedImage(Input::file('image'));
			    $post->save();
			}

			Session::flash('successMessage', 'Post saved successfully.');
			return Redirect::action('PostsController@index');
	    }		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		//return "Show a specific post";
		$post = Post::where('slug', $slug)->firstOrFail();
		$post->body = Parsedown::instance()->parse($post->body);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//return "Show a form for editing a specific post";
		$post = Post::find($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->slug = '';
		$post->save();
		return Redirect::action('PostsController@index');		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post deleted successfully.');
		return Redirect::action('PostsController@index');
	}
}
