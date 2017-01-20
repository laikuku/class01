<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

    @include('partials.head')
    @yield('title2')


</head>
<body>
	@yield('content')
</body>
</html>