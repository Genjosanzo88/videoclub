<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body>
	<div id="app" class="d-flex flex-column h-screen
	justify-content-between">
		<header>
			@include('partials.nav')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			{{ config('app.name') }} | Copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>

</html>

