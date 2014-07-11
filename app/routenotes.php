<?php

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
	//echo rand (1 ,6);

	$random_num = rand(1,6);

	return $random_num;

    //return "Lets roll dice!";
});



Route::get('/roll-dice/{guess}', function($guess)
{
	$random_num = rand(1,6);

	$data = array
	(
		'guess' => $guess,
		'random_num' => $random_num
	);
	return View::make('temp.roll-dice')->with($data);


//Routing notes-------------------
/*
Route::get('/resume', function() <--/resume is the url
{
	return View::make('resume');<--'resume' the file
});
*/


//master blade example------------
/*
	<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    @yield('topscript')
</head>
<body>
	<div class='content area'>
    @yield('content')
	</div>
    @yield('bottomscript')
</body>
</html>
*/


	?>