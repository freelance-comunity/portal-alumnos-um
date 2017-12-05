<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>
<body class="cover" style="background-image: url(./assets/img/loginFont.jpg);">
	@yield('content')
	<!--====== Scripts -->
	<script src="{{asset('/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/material.min.js')}}"></script>
	<script src="{{asset('/js/ripples.min.js')}}"></script>
	<script src="{{asset('/js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
	{{-- <script>
		$.material.init();
	</script> --}}
</body>
</html>
