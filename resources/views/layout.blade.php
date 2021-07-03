<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title','NOT NAME')</title>
	<style type="text/css">
		.active a {
           color: red;
           text-decoration: none;
		}
	</style>
</head>
<body>
<nav>
	{{ dump(request()->routeIs('portafolio'))}}
	<ul>
		<li class="{{ setActive('home') }}">
			<a href="/">HOME</a>
		</li>
		<li class="{{ setActive('about') }}">
			<a href="/about">ABOUT</a>
		</li>
		<li  class="{{ setActive('portafolio') }}">			<a href="/portafolio">PORTAFOLIO</a>
		</li>
		<li class="{{ setActive('contact') }}">
			<a href="/contact">CONTACT</a>
		</li>


	</ul>
</nav>
	@yield('content')
</body>
</html>