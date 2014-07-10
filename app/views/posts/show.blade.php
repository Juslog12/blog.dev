@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<html>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<h1>{{{ $post->title }}}</h1>
<h4>{{{ $post->user->email }}}</h4>
<h4>{{{ $post->created_at->diffforhumans() }}}</h4>
<hr>
{{{ $post->img_path }}}
{{ $post->renderBody() }}


{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE' )) }}

	{{ Form::submit('Delete') }}
	{{ Form::close() }}

@if ($post->img_path)
	<img src="{{{ $post->img_path }}}" class="img-responsive">
@endif

</html>
@stop

@section('bottomscript')
@stop		