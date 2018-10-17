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
