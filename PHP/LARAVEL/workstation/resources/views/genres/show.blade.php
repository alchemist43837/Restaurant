<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $genre->name }}</title>
</head>
<body>
	<h1>{{ $genre->name }}</h1>
	@foreach ($genre->movies as $movie)
		<p>{{ $movie->title }}</p>
	@endforeach
</body>
</html>
