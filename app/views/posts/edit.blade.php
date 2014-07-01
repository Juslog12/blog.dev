@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')


{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

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