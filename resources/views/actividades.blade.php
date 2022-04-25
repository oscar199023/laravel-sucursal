
@extends('layouts.app')

@section('title', 'Actividades')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>¿Que desea Realizar? </h2>
        </div>
    </div>
</div>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">Actividades</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/registrar') }}">Registrar</a>
                    <hr>
                    <a href="{{ url('/asignar') }}">Asignar a sucursal</a>
                    <hr>
                    <a href="{{ url('/consultar') }}">Consultar</a>
                    <hr>
                    <a href="{{ url('/eliminar') }}">Eliminar</a>
                    <hr>
                    <a href="{{ url('/actualizar') }}">Actualizar</a>
                </div>
            </div>

        </div>
    </div>
</div>


@stop