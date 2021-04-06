<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Royal Showroom</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/simple-line-icons.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mobile-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/revslider.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>


<body class="cms-index-index index">

    

{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/countdown.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider.js"></script> 
<script type="text/javascript" src="js/revolution.extension.js"></script> 
</body>
</html>