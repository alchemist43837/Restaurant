<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form  id="agregarPelicula" name="agregarPelicula" method="POST" action="/peliculas/create">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="duracion"/>
            </div>
            <div>
                <label for="release_date">release_date</label>
                <input type="date" name="release_date" id="release_date"/>
            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
