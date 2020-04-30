<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
		
	</head>
	<body>
		@yield('page_h1')
		
		<div class="cont red topBotomBordersOut">
		  <a href = "{{ route('home') }}">HOME</a>
		  <a href = "{{ route('contact') }}">Contact</a>
		  <a href = "{{ route('contact-data') }}">Messages</a>
		</div>
		
		@include('layouts.messages')
		@yield('content')
	</body>
</html>