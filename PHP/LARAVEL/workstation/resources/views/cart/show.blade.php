<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
</head>
<body>
	@foreach ($movies as $movie)
		<p>{{ $movie->title }}</p>
	@endforeach
</body>
</html>
