@extends('layouts.master')

@section('topscript')	
@stop 
  
@section('content')
<html>
</head>
    <body>
  
<section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Welcome</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle"></p> 

{{Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-signin'))}}
<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span>Please Sign in</h2>
<input name="email", type="text" class="form-control" placeholder="Email" value="{{Input::old('email')}}" required autofocus>Email</input>
<input name="password", type="password" class="form-control" placehoder="Password" required>Password</input><br><br>
<button class=:"btn btn-lg btn-primary btn-block", type="submit">Sign in</button>
{{ Form::close() }}
</html>
@stop



@section('bottomscript')
@stop