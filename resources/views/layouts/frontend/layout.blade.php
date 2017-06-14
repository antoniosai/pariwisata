<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
	
	@yield('custom_styles')

	<!--<style>	
		
		.navbar .navbar-nav {
		display: inline-block;
		float: none;
		vertical-align: top;
		}

		.navbar .navbar-collapse {
		text-align: center;
		}
	</style>-->

</head>
<body>
	@include('layouts.frontend.menu')

	@yield('content')

    <!--   Core JS Files   -->
    <script src="{!! asset('assets/js/jquery-1.10.2.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{!! asset('assets/js/bootstrap-checkbox-radio-switch.js') !!}"></script>
	<!--  Notifications Plugin    -->
	<script src="{!! asset('assets/js/bootstrap-notify.js') !!}"></script>

	@include('layouts.frontend.footer')

	@yield('custom_scripts')
		
</body>
</html>