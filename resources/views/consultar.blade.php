@extends('layouts.master')

@section('header')
<h1>Ingrese los Datos para Consultar</h1>
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">CODIGO</label>
                        <input type="text" name="codigoConsulta" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">NOMBRE</label>
                        <input type="text" name="nombreConsulta" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">SUCURSAL</label>
                        <input type="text" name="sucursalConsulta" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">CONSULTAR</button>
                    @if($errors->any())
                    <p>completa todos los datos</p>
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