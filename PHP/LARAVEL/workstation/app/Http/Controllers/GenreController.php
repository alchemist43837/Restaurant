<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($id)
    {
    	$genre = Genre::find($id);
    	return view('genres.show', ['genre' => $genre]);
    }

    public function insert()
    {
    	/*
    	$genre = new Genre;
    	$genre->name = 'Animadas';
    	$genre->ranking = 13;
    	$genre->active = 1;
    	$genre->save();
    	*/

    	$genre = Genre::create([
    		'name' => 'Test',
    		'ranking' => 15,
    		'active' => 1,
    		'id' => 1,
    		'noExiste' => 'Valor'
    	]);


    	dd($genre->toArray());
    }

}
