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

Route::get('/Productos',function() {

  return 'Hola Mundo' ;
});

Route::get('/resultado/{numero}/{num2?}',function($numero,$num2=null ) {
// PSR2 --convencion
    $respuesta ;
    if ($num2===null){
      $respuesta = ($numero % 2 ) ?'Esimpar':'Es par';
    }
    else{
      $respuesta=$numero*$num2;
    }
     return $respuesta;

});

Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');

Route::get('/peliculas','PeliculasController@mostrarPeliculas');


Route::get('buscar/{peli}','PeliculasController@buscarPeliculaNombre');

Route::get();
