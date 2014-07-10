@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')

	
	@if(isset($post))
	<h2>Edit Post</h2>
	<h4>{{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</h4>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true)) }}
	@else
	<h2>Create a New Post</h2>
	
	{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	@endif

		{{ $errors->first('title', '<span class="help-block">:message</span>') }}
		<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		</div>

		{{ $errors->first('body', '<span class="help-block">:message</span>') }}
		<div class="form-group">
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body') }}	
		</div>
		<div>
			{{ Form::label('image', 'Image') }}
			{{ Form::file('image') }}
		</div>

		<input type="submit">
	{{ Form::close() }}

@stop

@section('bottomscript')
@stop