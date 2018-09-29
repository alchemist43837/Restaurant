<!doctype html>
@extends('app')

@section('contenido')
  @forelse ($pelis as $key => $pelicula)
    <p>{{$pelicula}}</p>
  @empty
    <p>No hay pelis</p>
  @endforelse
@endsection
