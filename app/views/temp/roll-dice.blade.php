<!doctype html>
<html>
<head>
    <title>My First View</title>
</head>
<body>
    <h1>The random role was: {{{ $random_num }}}</h1></br>
    <h1>Your role was: {{{ $guess }}}</h1></br>
    <h1>
	   <? if($random_num == $guess) : ?>
		    <p> "You got it right!"</p> 	
	    <? else : ?>
	  		<p>"Sorry! Try again"</p>
	  	<? endif; ?>
	</h1>  	
</body>
</html>