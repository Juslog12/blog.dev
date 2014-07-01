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
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

/*
Route::get('/orm-test', function () 
{
 	//$posts = Post::all();

 	//foreach ($posts as $post){
 	//	echo $post->title . "<br>";
 	//	echo $post->body . "<br>";
 	//
}*/

 	/*$post = Post::find(1);

 	echo $post->title . "<br>";
 	echo $post->body . "<br>";
 	return "Eloquent ORM is great!";
	});*/

	
	//$post = Post::find(1);
	//$post->title = "New Title Goes Here.";
	//$post->save();

	

/*
Route::get('/resume', function()
{
	return View::make('pages.resume');
});


Route::get('/portfolio', function()
{
	return View::make('pages.portfolio');
});
*/







