<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index()
    {

      // $genres= Genre::all();
      // return view('index',['generos'=>$genres]);
        // dd($genre);
      $genres = Genre::orderBy('name')->get();
      return view('genres.index',['generos'=>$genre]);

    }

    join
    $genre= Genre::join('movies','genre_id')



}
