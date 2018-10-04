<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      {{-- @foreach ($movies as $movie )
        <li>{{$movie->title}}</li>
      @endforeach --}}

      <ul> {{$genre->movies->title}} </ul>
      @foreach ($genre->movies as $a)
        <li>]{{$a->ranking}}</li>
        <li>{{$a->active}}</li>
      @endforeach

  </body>
</html>
