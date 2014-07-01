

@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<h1>All the Posts</h1>

 @foreach ($posts as $post)
 	{{link_to_action('PostsController@show', $post->title, array($post->id))}}<br>	
 @endforeach
 <hr>
 {{link_to_action('PostsController@create', 'New Post')}}
@stop

@section('bottomscript')
@stop