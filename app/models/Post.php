<?php

class Post extends Eloquent 
{
	//comment here what db this model relates to.
    protected $table = 'posts';

    //validation rules for our model properties.
    static public $rules = 
    [
    	'title' => 'required|max:100',
    	'body'  => 'required|max:10000'
    ];

}