<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylecss.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
	@include('userpage.header')

    @yield('profile')
    @yield('homepage')
    @yield('albumhot')
    @yield('singerhot')
    @yield('song')
    @yield('video')
    @yield('playlist')

    @include('userpage.footer')
    <script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
