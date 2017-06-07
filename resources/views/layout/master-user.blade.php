<!DOCTYPE html>
<html>
<head>
	<title>Vestindo Certo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimal-ui">
	<script type="text/javascript" src="{{asset('plugin/jquery-1.12.3.min/jquery-1.12.3.min.js')}}"></script>
	<!--<script type="text/javascript" src="{{asset('plugin/jquery-1.12.3.min/jquery-ui.min.js')}}"></script>-->
	<script type="text/javascript" src="{{asset('plugin/bootstrap-3.3.6-dist/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('plugin/bootstrap-3.3.6-dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugin/font-awesome-4.6.3/css/font-awesome.min.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{asset('css/usuarios.css')}}">
	@yield('head')
</head>
<body>
	@include('layout.nav-usuario')
	@yield('content')
	@yield('style')
	@yield('script')
	@include('layout.footer')
</body>
</html>