<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
  public $peliculas = [
    1 => "Toy Story",
    2 => "Buscando a Nemo",
    3 => "Avatar",
    4 => "Star Wars - Ep 4",
    5 => "Up",
    6 => "Mary and Max"
  ];


  public function  buscarPeliculaId($id){

    return  $this->peliculas[$id];

      // return $peliculas[$id];
    }

    public function buscarPeliculaNombre($nombre){

      // $a=array_search ($nombre,$this->peliculas,false);
      // dd($a);
      return $this->peliculas[$a];

      foreach ($this->peliculas as $key => $pelicula) {
        // var_dump($pelicula);
          if($nombre == $pelicula){
            return $pelicula;
        }

    }
  }
    public function mostrarPeliculas(){

      // return $this->peliculas;
      $a='';
      foreach ($this->peliculas as $key => $pelicula) {
         $a.= "<li>".$pelicula."</li>" ;
      }
      return $a;
    }

    public function index()
    {
      return view('peliculas/index',['pelis'=>$this->peliculas]);
    }
}
