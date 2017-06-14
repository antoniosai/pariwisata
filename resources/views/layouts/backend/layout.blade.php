
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{!! asset('assets/img/favicon.ico') !!}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{!! asset('css/bootstrap.min.css') !!} " rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{!! asset('assets/css/animate.min.css') !!} " rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{!! asset('assets/css/light-bootstrap-dashboard.css') !!} " rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! asset('assets/css/demo.css') !!} " rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="{!! asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') !!} " rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{!! asset('assets/css/pe-icon-7-stroke.css') !!} " rel="stylesheet" />

    @yield('custom_styles')

</head>
<body>

<div class="wrapper">
    @include('layouts.backend.sidebar')

    <div class="main-panel">
        @include('layouts.backend.navbar')

        <div class="content">
            <div class="container-fluid">
                @include('partials.alert')
                @include('partials.warning')
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="{!! asset('http://www.creative-tim.com') !!}">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{!! asset('assets/js/jquery-1.10.2.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{!! asset('assets/js/bootstrap-checkbox-radio-switch.js') !!}"></script>

	<!--  Charts Plugin -->
	<script src="{!! asset('assets/js/chartist.min.js') !!}"></script>

    <!--  Notifications Plugin    -->
    <script src="{!! asset('assets/js/bootstrap-notify.js') !!}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{!! asset('assets/js/light-bootstrap-dashboard.js') !!}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{!! asset('assets/js/demo.js') !!}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

    	});
	</script>

    @yield('custom_scripts')

</html>
