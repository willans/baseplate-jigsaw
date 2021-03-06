<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $page->title }}</title>

	<link rel="stylesheet" href="/compiled/css/app.css">
</head>
<body>
	<main class="flex items-center min-h-screen p-3 text-center">
		<div class="x-copy m-auto max-w-copy">
			@yield('content')
		</div>
	</main>
</body>
</html>
