<?php
    use App\Helpers\AppHelp;
?>
<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Overwatch Buddy Finder helps you find teams or players if you are a team leader to play Overwatch. Easy, free, powerful.">
        <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <title>LOOKING FOR HEROES</title>
        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic&subset=latin" rel="stylesheet" type="text/css" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/app.min.css') }}">

        <!-- vendor js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/Javascript" src="{{ URL::asset('assets/vendor/velocity.js') }}"></script>
        <script type="text/Javascript" src="{{ URL::asset('assets/vendor/velocity-ui.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- custom js -->
        <script type="text/Javascript" src="{{ URL::asset('assets/js/app.js') }}"></script>
    </head>
    <body>
    	<div class="header">
    		@include('layout.header')
    	</div>

        <div class="container">
            @yield('content')
        </div>

    	<div class="footer">
    		@include('layout.footer')
    	</div>
    </body>
</html>
