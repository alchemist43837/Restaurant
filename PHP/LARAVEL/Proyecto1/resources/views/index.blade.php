<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Generos</title>
  </head>
  <body>
    <ul>
      @foreach ($generos as $genero )
        <li>{{$genero->name}}</li>
      @endforeach
    </ul>
  </body>
</html>
