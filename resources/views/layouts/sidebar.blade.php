<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SAEC</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href=" {!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{!! asset('css/material-dashboard.css') !!}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="tecblue" data-image="../img/img1.jpg">

			<!--
			#0033A0
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a class="simple-text">
					SAEC
				</a>
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">

					@role('student')
					<li class= "{{strpos(Request::url(), 'actividades') ? 'active' : 'inactive' }}">
	                    <a href="{{ route('actividades.index') }}">
	                        <i class="material-icons">library_books</i>
	                        <p>Actividades</p>
	                    </a>
	                </li>
					<li class= "{{strpos(Request::url(), 'calificaciones') ? 'active' : 'inactive' }}">
	                    <a href="{{ route('calificaciones.index') }}">
	                        <i class="material-icons">content_paste</i>
	                        <p>Desempeño</p>
	                    </a>
	                </li>
	                <li class= "{{strpos(Request::url(), 'perfil') ? 'active' : 'inactive' }}">
	                    <a href="{{ route('perfil.index') }}">
	                        <i class="material-icons">person</i>
	                        <p>Perfil</p>
	                    </a>
	                </li>
					@endrole

					@role('professor')
					<li class= "{{strpos(Request::url(), 'actividades') ? 'active' : 'inactive' }}">
	                    <a href="{{ route('actividades.index') }}">
	                        <i class="material-icons">library_books</i>
	                        <p>Actividades</p>
	                    </a>
	                </li>

	                <li class= "{{strpos(Request::url(), 'grupos') ? 'active' : 'inactive' }}">
	                    <a href="/grupos">
	                        <i class="material-icons">library_books</i>
	                        <p>Grupos</p>
	                    </a>
	                </li>
					@endrole

	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">@yield('title')</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="{{ route('/home') }}">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">2</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('actividades.index') }}">1 Actividad pendiente de matem&aacuteticas</a></li>
									<li><a href="{{ route('actividades.index') }}">1 Actividad pendiente de &Aacutelgebra lineal</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">power_settings_new</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
		 						<ul class="dropdown-menu">
									<li><a href="{{ route('logout') }}">Log out</a></li>
								</ul>
							</li>
						</ul>

					</div>
				</div>
			</nav>

			@yield('content')

			<footer class="footer">
				<div class="container-fluid">

				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->

	<script src="{!! asset('js/jquery-3.1.0.min.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/material.min.js') !!}"></script>

	<!--  Charts Plugin -->

	<!--  Notifications Plugin    -->
	<script src="js/bootstrap-notify.js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{!! asset('js/material-dashboard.js') !!}" type="text/javascript"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

    	});
	</script>

</html>
