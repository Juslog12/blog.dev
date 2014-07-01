@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')

<h1>{{{ $post->title }}}</h1>
<p>{{{ $post->body }}}</p>


@stop

@section('bottomscript')
@stop		