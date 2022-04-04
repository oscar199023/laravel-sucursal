@extends('layouts.master')
@section('header')
<h1>Ingrese los Datos para Eliminar</h1>
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <form action="{{url('formularioEliminar')}}" method="post">
                    <div class="mb-3">
                        <label for="">Eliminar</label>
                        <input type="text" name="eliminarID" class="form-control" placeholder="ingrese ID a Eliminar">
                    </div>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    @if($errors->any())
                    <p>Ingrese el ID</p>
                    <hr>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@stop

@section('footer')
<hr>
<a href="http://127.0.0.1:8000/actividades">Regresar</a>
@stop