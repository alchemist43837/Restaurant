<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$genre->name}}</title>
  </head>
  <body>
    <ul>
      {{-- @foreach ($genre as $a )
        <li>{{$a->name}}</li>
      @endforeach --}}
      {{-- <li> {{dd($genre->movies->toArray())}} </li> --}}


      <h1> Genero - {{$genre->name}}</h1>
      @foreach ($genre->movies as $movie)
        <li> <a href="/peliculas/{{$movie->id}}"> {{$movie->title}} </a> </li>
      @endforeach</li>
  </body>
</html>
