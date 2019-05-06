<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Arvo|Dancing+Script" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	</head>

	<body>

		<div id="app">

			<header>   @include('layouts.header')   </header>

			<main style="margin-top: 1rem;">   @yield('content')   </main>

			<footer>  @include('layouts.footer')   </footer>

		</div>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

	</body>

</html>
