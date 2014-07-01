

@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<html>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<h2>All Posts</h2>
<table class="table table-hover" align= "center" border = black 1px solid>
 <th>Title</th>
 <th>Action</th>

 @foreach ($posts as $post)
 <tr>
 	<td>
 	{{link_to_action('PostsController@show', $post->title, array($post->id))}}	
 	</td>
 	<td>
 	{{link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' =>'btn btn-default btn-sm'))}}
 	</td>
 </tr>	
 @endforeach
 </table>
 
 <hr>
 {{link_to_action('PostsController@create', 'New Post')}}<br>
 <br>
 <br>
{{ $posts->links() }}
@stop

</html>

@section('bottomscript')
@stop