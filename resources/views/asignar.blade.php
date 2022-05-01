@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Asignar producto en sucursal</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    @foreach($productos as $producto)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{url('guardarProductoSucursal')}}" method="post">
                    <div class="mb-3">
                        <input id="prodId" name="prodId" type="hidden" value="{{ $producto->id }}">
                        <label for="">CODIGO</label>
                        <input disabled type="text" name="prodCodigo" class="form-control" value="{{ $producto->codigo }}">
                    </div>
                    <div class="mb-3">
                        <label for="">NOMBRE</label>
                        <input disabled type="text" name="prodNombre" class="form-control" value="{{ $producto->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="">SUCURSAL</label>
                        <select name="prodSucursal" class="form-select">
                            <option selected value="1">Alameda</option>
                            <option value="2">Apoquindo</option>
                            <option value="3">Vicuña Mackenna</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">CANTIDAD</label>
                        <input type="text" name="prodCantidad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">PRECIO</label>
                        <input type="text" name="prodPrecio" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Asignar producto a sucursal</button>
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
    @endforeach
</div>
@stop