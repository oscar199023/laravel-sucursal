
@extends('layouts.app')

@guest
@else
    @section('title', 'Actividades')
    
    @section('header')
        <h1>ACTIVIDADES</h1>
        <h2>¿Que desea Realizar? </h2>
    @stop
    
    @section('content')
        <hr>
        <a href="/registrar">Registrar</a>
        <hr>
        <a href="/consultar">Consultar</a>
        <hr>
        <a href="/eliminar">Eliminar</a>
        <hr>
        <a href="/actualizar">Actualizar</a>
    
    @stop
@endguest