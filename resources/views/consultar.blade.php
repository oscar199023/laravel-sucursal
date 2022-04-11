@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ingrese los Datos para Consultar</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('formularioConsultar')}}" method="post">
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
