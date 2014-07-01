@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
	
	@if(isset($post))
	<h2>Edit Post</h2>
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
	@else
	<h2>Create a New Post</h2>
	{{ Form::open(array('action' => 'PostsController@store')) }}
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

		<input type="submit">
	{{ Form::close() }}

@stop

@section('bottomscript')
@stop