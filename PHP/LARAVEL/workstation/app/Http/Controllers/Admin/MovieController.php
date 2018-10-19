<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

	public function index()
	{
		$movies = Movie::whereNotNull('genre_id')
			->with('genre')
			->orderBy('title')
			->paginate(5)
		;
		//dd($movies->toArray());
		//dd($movies->toJson());
		//dd($movies->all());
		//dd($movies->count());
		//dd($movies->pluck('title', 'id'));
		//return '<p>' . $movies->pluck('title')->implode('</p><p>') . '</p>';

		$cienciaFiccion = $movies->filter(function ($item) {
			return $item->genre_id == 3;
		});


		$moviesModified = $movies->map(function ($item) {
			$item->title = $item->title . ' - ' . $item->genre->name;
			return $item;
		});

		//dd($moviesModified->toArray());

		return view('admin.movies.index', ['movies' => $movies]);
	}

    public function create()
    {
    	$genres = \App\Genre::orderBy('name')->get();

    	return view('admin.movies.create', ['genres' => $genres]);
    }

    public function insert(Request $request)
    {
    	//dd(request()->only(['title', 'rating', 'awards']));
    	//dd(request()->except(['enviador', '_token']));
    	//dd(request()->input('title'));

    	//dd(request()->path());
    	//dd(request()->is('clients/*'));
    	//dd(request()->method());

    	//dd($request->only(['title', 'rating', 'awards']));
    	//dd($request->all());

        /*
    	$request->validate([
    		'title' => 'required|min:3|max:255',
    		'rating' => 'required|numeric|max:10|confirmed',
    		'banner' => 'image|dimensions:ratio=16/9'
    	], [
    		'title.required' => 'Te faltó el título',
    		'title.min' => 'El título tiene que tener al menos 3 ....',
    		'rating.min' => 'El título tiene que tener al menos 10 ....',
    	]);
        */


        //store array
        //$paths = [];
        //if ($request->hasFile('banners')) {
            //foreach($request->file('banners') as $banner) {
                //$paths[] = $banner->store('images/banners');
            //}
        //}
        //dd($paths);

        //store
        //if ($request->hasFile('banner')) {
            //$path = $request->file('banner')->store('images');
            //$datos['banner'] = $path;
        //}

    	$datos = $request->all();
    	//$movie = Movie::create($datos);

        //store as
        if ($request->hasFile('banner')) {
            //$nombre =  str_slug($request->input('title'));
            //$nombre .=  '.' . $request->file('banner')->extension();
            //$path = $request->file('banner')->storeAs('images/movies', $nombre);
            //$datos['banner'] = $path;

            $nombre =  str_slug($request->input('title'));
            $nombre .=  '.' . $request->file('banner')->extension();


            //$path = $request->file('banner')->storeAs('images/movies', $nombre);


            $path = \Image::make($request->file('banner'))
                ->fit(50, 50)
                ->save('images/movies', $nombre)
            ;

            dd($path);


            \App\Image::create([
                'src' => $path,
                'movie_id' => $movie->id
            ]);
        }


    	return 'todo bien';

    	//Alternativa si la imagen es una tabla aparte
    	//Image::create(['src' => $path, 'movie_id' => $movie->id]);

    	return redirect('admin/movies/create');
    }

    public function edit($id)
    {
    	$movie = Movie::find($id);
    	$genres = \App\Genre::orderBy('name')->get();

    	return view('admin.movies.edit', ['movie' => $movie, 'genres' => $genres]);
    }

    public function update($id)
    {
    	$movie = Movie::find($id);

    	$movie->update(request()->all());

    	return redirect('admin/movies/create');
    }

}
