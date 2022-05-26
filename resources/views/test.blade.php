<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
</head>
<body>
	<h1>Hello bodoi</h1>
	@section('sidebar')
	@show

	<div class="container">
		@yield('content')
	</div>
</body>
</html>