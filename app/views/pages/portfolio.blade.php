
@extends('layouts.master')


@section('content')
<a href="{{{action('HomeController@showPortfolio')}}}">Portfolio</a>
    <h1>My Portfolio</h1>
    <ul>Projects</ul>
    	<li>Fizzbuzz</li>
    	<li>Whackamole</li>
    	<li>Random Number Guess</li>
@stop

