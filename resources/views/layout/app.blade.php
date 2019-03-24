<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <title>Hankook Sarang Korean Restaurant | 한국 사랑 한식당</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    @include('inc.function-css')

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />

</head>
<body>
	@include('inc.header')
	@yield('content')
	@include('inc.footer')
    @include('inc.function-js')

	
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/rellax.min.js')}}"></script>
    <!-- jssor slider -->
    <script src="{{asset('js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
    <!-- custom js -->
    <script src="{{asset('js/jssor.slider-27.5.0.min.js')}}" async></script>
</body>
</html>