@extends('layouts.master')

@section('header')
<h1>Ingrese los Datos para Actualizar</h1>
@stop

@section('content')

<div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">NOMBRE</label>
                        <input type="text" name="nombreActualizar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">PRECIO</label>
                        <input type="text" name="precioActualizar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">DESCRIPCION</label>
                        <input type="text" name="descripcionActualizar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                </form>
            </div>
        </div>
    </div>

@stop

@section('footer')

<hr>
<a href="http://127.0.0.1:8000/actividades">Regresar</a>
@stop