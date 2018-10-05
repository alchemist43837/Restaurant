<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller

{
    //el fillable especfica los campos a insertar masivamente
    // protected fillable = ['name','','','']


    public function index()
    {

      // $genres= Genre::all();
      // return view('index',['generos'=>$genres]);
        // dd($genre);
      $genre = Genre::orderBy('name')->get();
      return view('genres.index',['generos'=>$genre]);

    }

    // join
    // $genre= Genre::join('movies','genre_id')
    public function show($id)
    {
      $genre =Genre::find($id);
      // $genre = Genre('name')->get();
      return view('Genre.index',['genre'=>$genre]);
    }

public function insert()
{
  $genre = new Genre;
  $genre->name= 'animadas';
  $genre->ranking=13;
  $gente->active=1;

  // $genre->save();

  //
  //   $genre= \App\Genre::create([
  // 'name'=> 'SitCom',
  // 'ranking'=>14,
  // 'active'=>1
  // ]);

  dd ($genre->toArray());
}

}
