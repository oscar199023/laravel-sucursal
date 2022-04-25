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
                    <label>Buscar por</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="buscarProductoPor" id="flexRadioDefault1" value="codigo" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Código
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="buscarProductoPor" id="flexRadioDefault2" value="nombre">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Nombre
                        </label>
                    </div>
                    <input type="text" name="codigoConsulta" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">SUCURSAL</label>
                    <select name="sucursalConsulta" class="form-select">
                        <option selected value="">-Seleccione sucursal (opcional)-</option>
                        <option value="1">Alameda</option>
                        <option value="2">Apoquindo</option>
                        <option value="3">Vicuña Mackenna</option>
                    </select>
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
