<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Rent a movie')</title>
  </head>
  <body>
    <nav>
      <ol>
        <li> <a href="#"></a> Uno </li>
        <li> <a href="#"></a> Dos </li>
        <li> <a href="#"></a> Tres </li>
      </ol>
    </nav>
    <main>
      @section('titulo')
      <h1>Rent a Movie</h1>
      @show
      @endsection

        @yield('contenido')
    </main>
    <footer>
      <p>Footer</p>
    </footer>
  </body>
</html>
