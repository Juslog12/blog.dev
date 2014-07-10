@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<html>
    <body>
  
<section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">My Current Posts</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">Entrepreneur Stories</p> 

<table class="table table-hover" align= "center" >
 <th>Title</th>
 <th>Author</th>
 <th>Created</th>
 @if(Auth::check())
 <th>Action</th>
 @endif

 @foreach ($posts as $post)
 <tr>
 	<td height="200px" width="200px">
  @if ($post->img_path)
  <img src="{{{ $post->img_path }}}" class="img-responsive">
  @endif
 	{{link_to_action('PostsController@show', $post->title, array($post->id))}}	
 	</td>
 	<td>
 	{{{ $post->user->email }}}	
 	</td>
 	<td>
 	{{{ $post->created_at->diffforhumans() }}}	
 	</td>
 	@if(Auth::check())
 	<td>
 	{{link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' =>'btn btn-default btn-sm'))}}
 	</td>
 	@endif
 </tr>	
 @endforeach
 </table>

 <hr>
 {{link_to_action('PostsController@create', 'New Post', array($post->id), array('class' => 'btn btn-default btn-sm'))}}<br>
 <br>
{{ Form::open(array('action' =>'PostsController@index', 'class' => 'form-inline','method' => 'GET' )) }}
<div class= "form-group">
	{{ Form::text ('search', null, array('placeholder' => 'search here', 'class' => 'form-control col-lg-4')) }}	
</div>
	<button type ="submit" class ="btn btn-success">Submit</button>
	{{ Form::close() }}	

 <br>
{{ $posts->links() }}

</div>
            </div>
      </div> 
</section><!-- profile ends -->
</html>
  <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.vegas.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/main.js"></script>

@stop



@section('bottomscript')
@stop