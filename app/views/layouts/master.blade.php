<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Articulate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- Magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Color styles -->
    <link rel="stylesheet" href="css/colors/blue.css">
   <!-- <link rel="stylesheet" href="css/colors/yellow.css">-->
   <!-- <link rel="stylesheet" href="css/colors/red.css">-->
   <!--  <link rel="stylesheet" href="css/colors/purple.css">-->
   <!--  <link rel="stylesheet" href="css/colors/orange.css">-->
   <!--  <link rel="stylesheet" href="css/colors/green.css">-->
    
     <!-- Feature detection -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav" >
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-welcome' ) }}}">Home</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-profile' ) }}}">Profile</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-skills' ) }}}">Skills</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-education' ) }}}">Education</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-experience' ) }}}">Experience</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-portfolio') }}}">Portfolio</a></li>
                    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                    <li><a href="{{{ action('HomeController@showPortfolio', '#page-contact' ) }}}">Contact</a></li>  
                    @if (Auth::check())                 
                        <!--<li>{{ Auth::user()->email }}</li>   
                        <li>{{ link_to_action('PostsController@create', 'Create Post') }}</li>-->
                        <li>{{ link_to_action('HomeController@logout', 'Logout') }} </li>   
                    @else
                    
                        <li>{{ link_to_action('HomeController@showLogin', 'Login') }}</li>
                    
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
   @endif
   @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
   @endif

<body>
	@yield('content')   

</body>
</html>