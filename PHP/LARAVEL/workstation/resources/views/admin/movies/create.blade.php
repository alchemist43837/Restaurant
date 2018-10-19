<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear película</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style type="text/css">
		body {
			padding: 40px
		}
	</style>
</head>
<body>
	<h1>Crear película</h1>

	<div class="container">

		@if (count($errors))
			<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		<form action="/admin/movies" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title">Títulos</label>
	<input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
			</div>
			<div class="form-group">
				<label for="rating">Rating</label>
				<input class="form-control" type="text" name="rating" id="rating">
			</div>
			<div class="form-group">
				<label for="rating_confirmation">Rating</label>
				<input class="form-control" type="text" name="rating_confirmation" id="rating_confirmation">
			</div>
			<div class="form-group">
				<label for="awards">Premios</label>
				<input class="form-control" type="text" name="awards" id="awards">
			</div>
			<div class="form-group">
				<label for="release_date">Fecha de estreno</label>
				<input class="form-control" type="date" name="release_date" id="release_date">
			</div>
			<div class="form-group">
				<label for="length">Duración</label>
				<input class="form-control" type="text" name="length" id="length">
			</div>
			<div class="form-group">
				<label for="banner">Imagen</label>
				<input class="form-control" type="file" name="banner" id="banner" multiple>
			</div>
			<div class="form-group">
				<label for="genre_id">Género</label>
				<select class="form-control" name="genre_id" id="genre_id">
					@foreach ($genres as $genre)
						@php
							$selected = ($genre->id == old('genre_id')) ? 'selected' : '';
						@endphp

						<option value="{{$genre->id}}" {{$selected}}>{{ $genre->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="enviador">Enviar</button>
			</div>
		</form>
	</div>

</body>
</html>
