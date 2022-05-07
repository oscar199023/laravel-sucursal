@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Actualizar producto en sucursal</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($sucursal_productos as $sucursal_producto)                
                <form action="{{url('formularioActualizar')}}" method="post">
                    <div class="mb-3">
                        <label for="">CODIGO</label>
                        <input type="hidden" name="codigoActualizar" value="{{ $sucursal_producto->producto->codigo }}">
                        <input type="text" class="form-control" disabled value="{{ $sucursal_producto->producto->codigo }}">
                    </div>
                    <div class="mb-3">
                        <label for="">NOMBRE</label>
                        <input type="text" name="nombreActualizar" class="form-control" placeholder="ingrese nombre" value="{{ $sucursal_producto->producto->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="">DESCRIPCION</label>
                        <input type="text" name="descripcionActualizar" class="form-control" placeholder="ingrese descripción" value="{{ $sucursal_producto->producto->descripcion }}">
                    </div>  
                    <div class="mb-3">
                        <label for="">SUCURSAL</label>
                        <input type="hidden" name="sucursalActualizar" value="{{ $sucursal_producto->sucursal->id }}">
                        <input type="text" class="form-control" disabled  value="{{ $sucursal_producto->sucursal->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="">PRECIO SUCURSAL</label>
                        <input type="text" name="precioActualizar" class="form-control" placeholder="ingrese precio" value="{{ $sucursal_producto->precio }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar producto en sucursal</button>
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
                <form action="{{url('eliminarProductoDeSucursalVistaActualizar')}}" method="post">
                    <input id="prodId" name="prodId" type="hidden" value="{{ $sucursal_producto->id }}">
                    <button type="submit" class="btn btn-danger">Eliminar producto de sucursal</button>
                </form>
            @endforeach
        </div>
    </div>
</div>
@stop