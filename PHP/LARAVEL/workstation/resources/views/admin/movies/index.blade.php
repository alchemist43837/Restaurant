<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Películas</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style type="text/css">
		body {
			padding: 40px
		}
		.page-item.active .page-link {
			background-color: tomato;
			border-color: tomato
		}
	</style>
</head>
<body>
	<h1>Películas</h1>

	@if (session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@endif


	<div class="container">
		@foreach ($movies as $movie)
			<p>
				{{ $movie->title  }}
				<a href="/admin/movies/add/{{$movie->id}}">Agregar</a>
			</p>
		@endforeach
	</div>

	{{ $movies->links() }}

</body>
</html>
