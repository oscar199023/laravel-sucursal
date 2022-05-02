@extends('layouts.app')

@section('header')
@if($mensaje_alert != "")
    <div class="alert alert-{{$tipo_alert}}" role="alert">
        {{$mensaje_alert}}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Eliminar Productos</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{url('consultaEliminar')}}" method="post">
                <div class="mb-3">
                    <label for="">Código de producto</label>
                    <input type="text" name="codigoConsultaEliminar" class="form-control" placeholder="Ingrese código de producto a Eliminar" required>
                </div>
                <div class="mb-3">
                    <label for="">Sucursal</label>
                    <select name="sucursalConsultaEliminar" class="form-select">
                        <option selected value="">-Seleccione sucursal (opcional)-</option>
                        <option value="1">Alameda</option>
                        <option value="2">Apoquindo</option>
                        <option value="3">Vicuña Mackenna</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
                @if($errors->any())
                <p>Ingrese el código de producto</p>
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
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h3>Todos los productos</h3>
            <p>Al dar de baja o eliminar un producto también se eliminará de las sucursales asociadas</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                            <tr>
                                <td scope="row">{{ $producto->codigo }}</td>
                                <th scope="row">{{ $producto->nombre }}</th>
                                <th scope="row">
                                    <form action="{{url('darDeBajaProducto')}}" method="post">
                                        <input id="prodId" name="prodId" type="hidden" value="{{ $producto->id }}">
                                        <button type="submit" class="btn btn-link" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Dar de baja producto</button>
                                    </form>
                                </th>
                                <th scope="row">
                                    <form action="{{url('eliminarProducto')}}" method="post">
                                        <input id="prodId" name="prodId" type="hidden" value="{{ $producto->id }}">
                                        <button type="submit" class="btn btn-link">Eliminar producto</button>
                                    </form>
                                </th>
                            </tr>
                    @endforeach
                </tbody>
            </table>
            @if($productos->isEmpty())
                Sin resultados
            @endif
        </div>
    </div>    
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h3>Productos asociados a sucursales</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sucursal_productos as $sucursal_producto)
                            <tr>
                                <td scope="row">{{ $sucursal_producto->producto->codigo }}</td>
                                <th scope="row">{{ $sucursal_producto->producto->nombre }}</th>
                                <th scope="row">{{ $sucursal_producto->sucursal->nombre }}</th>
                                <th scope="row">
                                    <form action="{{url('eliminarProductoDeSucursal')}}" method="post">
                                        <input id="prodId" name="prodId" type="hidden" value="{{ $sucursal_producto->id }}">
                                        <button type="submit" class="btn btn-link">Eliminar producto de sucursal</button>
                                    </form>
                                </th>
                            </tr>
                    @endforeach
                </tbody>
            </table>
            @if($sucursal_productos->isEmpty())
                Sin resultados
            @endif
        </div>
    </div>

</div>
@stop