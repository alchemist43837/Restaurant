<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('auth','auth')->middleware('auth');
//Ruta Simple
Route::get('Home',function(){
    return 'Prueba';
});
//Ruta con parametro
Route::get('Home/{nombre}',function($nombre){
  return 'Hola '.$nombre;
}
);

Route::get('contacto', 'StaticController@contacto');

Route::get('relaciones/test', function () {
	$movie = \App\Movie::find(2); //id de la peli
	$genre = \App\Genre::find(3); //id del género

	//dd($movie->genre->movies->toArray());
	//dd($movie->genre->toArray());

	dd($genre->movies->toArray());
});
Route::get('relaciones/sync', function () {
	$movie = \App\Movie::find(2);

	$movie->actors()->sync([4,5,6]);

	dd($movie->actors->toArray());

});

Route::get('relaciones/queries', function () {
	$movie = \App\Movie::find(2);

	//$actors = $movie->actors()->orderBy('first_name')->get();

	$actors = $movie->actors()
		->where('favorite_movie_id', 6)
		->orderBy('first_name')
		->get()
	;

	dd($actors->toArray());
});

Route::get('genre/insert', 'GenreController@insert');
Route::get('genre/{id}', 'GenreController@show');
Route::get('movie/byTitle/{title}', function ($title) {
	$movie = \App\Movie::where('title', $title)->first();
	dd($movie->toArray());
});

//---------------
//-----Admin-----
//---------------
Route::get('admin/movies', 'Admin\MovieController@index');
Route::get('admin/movies/create', 'Admin\MovieController@create');
Route::post('admin/movies', 'Admin\MovieController@insert');
Route::get('admin/movies/{id}/edit', 'Admin\MovieController@edit');
Route::put('admin/movies/{id}', 'Admin\MovieController@update');

Route::get('admin/movies/add/{id}', 'CartController@add');
Route::get('carrito', 'CartController@show');

Route::resource('admin/genres', 'Admin\GenreController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
