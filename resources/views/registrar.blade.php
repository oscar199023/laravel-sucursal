@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ingrese los Datos para Registrar</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('guardarFormulario')}}" method="post">
                <div class="mb-3">
                    <label for="">ID</label>
                    <input type="text" name="idProducto" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">CODIGO</label>
                    <input type="text" name="codigoStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombreStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">CATEGORIA</label>
                    <input type="text" name="categoriaStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">SUCURSAL DISPONIBLE</label>
                    <select name="sucursalStock" class="form-select">
                        <option selected value="alameda">Alameda</option>
                        <option value="apoquindo">Apoquindo</option>
                        <option value="vicuna_mackenna">Vicuña Mackenna</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">DESCRIPCION</label>
                    <input type="text" name="descripcionStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">CANTIDAD</label>
                    <input type="text" name="cantidadStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">PRECIO</label>
                    <input type="text" name="precioStock" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">REGISTRAR</button>
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