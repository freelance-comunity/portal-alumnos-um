<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('/css/main.css')}}">
	<!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Page level plugin CSS-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json">
	{{-- sweetalert2 --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Universidad Maya <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{asset('images/logo_um_blanco.png')}}" alt="UserIcon">
					<figcaption class="text-center text-titles">{{Auth::user()->name}} {{Auth::user()->last_name}}</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-exit-system">
							{{-- <i class="zmdi zmdi-power"></i> --}}
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();" class="zmdi zmdi-power" style="text-decoration:none;">
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
		@include('partials.sidebar')
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar" style="background-color:#0D47A1;">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				{{-- <li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li> --}}
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Nivel <small>@yield('title-dashboard')</small></h1>
			</div>
			@yield('widgets')
		</div>
		<div class="container-fluid">
      @yield('content')
		</div>
	</section>
  @include('partials.notifications')
	<!--====== Scripts -->
	<script src="{{asset('/js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('/js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/material.min.js')}}"></script>
	<script src="{{asset('/js/ripples.min.js')}}"></script>
	<script src="{{asset('/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
	<!-- Bootstrap core JavaScript-->
	<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Core plugin JavaScript-->
	<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
	<!-- Page level plugin JavaScript-->
	<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
	<!-- Custom scripts for this page-->
	<script src="{{asset('js/sb-admin-datatables.min.js')}}"></script>
	{{-- sweetalert2 --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  @include('sweet::alert')
	<script>
		$.material.init();
	</script>
	@yield('scripts')
</body>
</html>
