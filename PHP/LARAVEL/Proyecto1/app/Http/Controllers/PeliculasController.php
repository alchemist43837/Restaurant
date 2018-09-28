<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
  public function  buscarPeliculaId($id){

      $peliculas= [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars - Ep 4",
        5 => "Up",
        6 => "Mary and Max"
      ];

      return $peliculas[$id];

    }
}
