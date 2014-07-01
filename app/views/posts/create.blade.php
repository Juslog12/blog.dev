@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<html>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<h1>Create a New Blog Post</h1>

{{ $errors->first('title', '<span class="help-block">:message</span>') }}
<form role="form" action={{{ action('PostsController@store') }}} method="POST">

<div class="form-group">
<label for="title">Title</label>
<input class="form-control" type="text" id="title" name="title" value="{{{ Input::old('title') }}}" placeholder="Enter a title">
</div>

{{ $errors->first('body', '<span class="help-block">:message</span>') }}
<div class="form-group">
<label for="body">Body</label>
<textarea class="form-control" id="body" name="body" placeholder="Enter text here">{{{ Input::old('body') }}}</textarea>
<br>

<input type="submit">
</form>

</html>

@stop

@section('bottomscript')
@stop