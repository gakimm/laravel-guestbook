<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> --}}


     <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper" id="sisi">
            <div class="logo">
                <a href="#" class="simple-text">
                    <h4><b>HUMAS <span class="text-info">WIKRAMA</span></b></h4>
                </a>
            </div>

            <ul class="nav" id="sisi">
                <li>
                    <a href="{{ url('home') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('input') }}">
                        <i class="pe-7s-id"></i>
                        <p>Input Tamu</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('data') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Data Tamu</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('hari')}}">
                        <i class="pe-7s-note"></i>
                        <p>Laporan Hari Ini</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('report')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Semua Laporan</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('profile') }}">
                        <i class="pe-7s-user"></i>
                        <p>Profile Admin</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed" id="sisi">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">

                   {{--  <ul class="nav navbar-nav navbar-right">
                       
                        <li>
                            <a href="#">
                                <p><span class="fa fa-user"></span>Gakim</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul> --}}
                    <a class="navbar-brand" href="#">@yield('title')</a>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span>
                                        {{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                    @yield('content')

                </div>
            </div>

        <div class="footer">
        <footer class="footer">
            <div class="container-fluid">
               
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Gakim</a>, made with love for a better web
                </p>
            </div>
        </footer>
        </div>

        </div>
</div>


</body>

   

</html>
