@extends('layouts.master')
@section('title', 'Actividades')
@section('content')

@section('header')
    <h1>ACTIVIDADES</h1>
    <h2>¿Que desea Realizar? </h2>
@stop
    <hr>
    <a href="http://127.0.0.1:8000/registrar">Registrar</a>
    <hr>
    <a href="http://127.0.0.1:8000/consultar">Consultar</a>
    <hr>
    <a href="http://127.0.0.1:8000/eliminar">Eliminar</a>
    <hr>
    <a href="http://127.0.0.1:8000/actualizar">Actualizar</a>

@stop

@section('footer')
<hr>
<a href="http://127.0.0.1:8000/login">-salir-</a>
@stop