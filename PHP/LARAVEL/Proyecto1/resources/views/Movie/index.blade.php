<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($movies as $movie )
        <li>{{$movie->title}}</li>
      @endforeach
  </body>
</html>
