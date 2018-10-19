<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        //session()->put('carrito', $id);
        $cart = session()->get('carrito', $id);
        session()->push('carrito', $id);



        session()->flash('message', 'La peli se agregó');
        return redirect('admin/movies');
    }

    public function show()
    {
    	$movies = Movie::whereIn('id', session()->get('carrito'))->get();
    	return view('cart.show', ['movies' => $movies]);
    }
}
