<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
      $movies = Movie::where('rating','>=',8)
      ->where('rating','<=',10)
      ->orwhere('relase_date','>=','2003-01-01')
      ->where('relase_date','<=','2010-12-31')
      ->get()
      ;
    }

    public function buscar($resultado)
    {
      $movies= Movie::where('title','like', '%'.$resultado.'%')->get();
      //
      // $resultado='no hay coincidencia';
      return  view('Movie.index',['movies'=>$movies]);

    }

    public function showDetails($id)
    {
      $movie =Movie::find($id);
      // $genre = Genre('name')->get();
      return view('Genre.moviedetails',['movie'=>$movie]);

    }

  }
  //   public function buscar($peli){
  //   $peliculas=[
  //     1 =>'titanic',
  //     2 =>'avatar',
  //     3 =>'matrix'
  //   ];
  //
  //   $resultado='No hay pelis';
  //   foreach ($peliculas as $pelicula) {
  //     if($peli==$pelicula){
  //       $resultado="Se encontro la peli $pelicula";
  //       // break ;
  //     }
  //   }
  //   return $resultado;
  //
  // }



// parte 2
      // $movies = Movie::(function($query){
      //   $query->where('rating','>=',8)
      //       ->where('rating','<=',10)
      //       ;
      //
      // })
      // ->orWhere(function query){
      //   $query->where('release_date','>=','2003-01-01')
      //   ->where('release_date','<=','2010-12-31')
      //   ;
      // })->offset(5)->limit(5)->get();



      // return  view('movies.index'.['pelis'=>$movies]);

// }
