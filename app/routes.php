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


Route::get('/resume', function()
{
    return "This is my resume";
});


Route::get('/portfolio', function()
{
    return "This is my portfolio";
});


Route::get('/', function()
{
	return View::make('temp.my-first-view');
});


Route::get('/contacts/{id}', function($contacId)
{
	return "Contact: $contactId";
});


Route::get('/contacts/{id}', function($contacId)
{
	return View::make('contacts.show')->with('contact_id',$contactId);
});


Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris")
    {
        return Redirect::to('/');
    }
    else
    {
        return View::make('temp.my-first-view')->with('name',$name);

    }
});
//second way of doing above

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris")
    {
        return Redirect::to('/');
    }
    else
    {
        $data = array('name' => $name);
        return View::make('temp.my-first-view')->with($data);
        
    }
});

Route::get('/rolldice', function()
{
    return "Lets roll dice!";
});

