<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css"> --}}
	{{-- <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css"> --}}
	{{-- <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css"> --}}
	{{-- <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	{{-- <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css"> --}}
	{{-- <link rel="stylesheet" href="source/assets/dest/css/animate.css"> --}}
	{{-- <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css"> --}}
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/huong-style.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/style.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/settings.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/colorbox.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/')}}">
	<link rel="stylesheet" title="style" href="{{ URL::to('source/assets/dest/css/')}}">


	<style>
		.images_item {
			width: 250px;
			height: 150px;
		}
	</style>
</head>
<body>
@include('header')
@yield('content')
@include ('script')

@include('footer')
<!-- include Js files -->
@include('script')

</body>
</html>