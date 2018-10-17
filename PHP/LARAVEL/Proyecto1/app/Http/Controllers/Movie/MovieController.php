<?php
//explicacion de clase
namespace App\Http\Controllers\Movie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
      public function create (Request $request ){
        // dd($request->all());
        $request->validate([
          'title'=>'required|min:3|max:255',
          'rating'=>'required|numeric|max:10|confirmed',
        ],[
          'title.required'=>'Te falto el titulo',
          'title.min'=>'El titulo debe tener al menos 3 caracteres',
          'rating.min'=>'el titulo debe tener al menos 10 caracteres'
        ]);

        \App\Movie::create($request->all());


        return view('Movie.pelicula');





      }

      function edit($id){
        $movie = Movie :: find($id);

        return view(admin.movie)
      }


    // $request->validate([
    //   'title'=>'required|min:3|max:255',
    //   'rating'=>'required|numeric|max:10|confirmed',
    // ],[
    //   'title.required'=>'Te falto el titulo',
    //   'title.min'=>'El titulo debe tener al menos 3 caracteres',
    //   'rating.min'=>'el titulo debe tener al menos 10 caracteres'
    // ]);
    // dd('Todo Bien');
    // Movie::create($request->all());

    //return redirect ('admin/movies/create')
}
