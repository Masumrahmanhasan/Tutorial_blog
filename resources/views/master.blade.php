<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<!-- Font -->
	@include('frontend.partials._head')

</head>
<body >

	<div id="app">
        <!-- slider -->

        <!-- section -->

        <navbar-view></navbar-view>
        @yield('content')
        <footer-view></footer-view>


    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    @include('frontend.partials._scripts')
    

</body>
</html>
