@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<h1>Create a New Blog Post</h1>
<form action={{{ action('PostsController@store') }}} method="POST">
<label for="title">Title</label>
<input type="text" id="title" name="title" value="{{{ Input::old('title') }}}">
<br>

<label for="body">Body</label>
<textarea id="body" name="body">{{{ Input::old('body') }}}</textarea>
<br>

<input type="submit">
</form>


@stop

@section('bottomscript')
@stop