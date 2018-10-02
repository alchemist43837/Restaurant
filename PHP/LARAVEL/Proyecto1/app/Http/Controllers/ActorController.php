<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    $actors=Actor::all();
    return view('actors.actor',)
}
