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
            <h1>Asignar producto en sucursal</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                            <tr>
                                <td scope="row">{{ $producto->codigo }}</td>
                                <th scope="row">{{ $producto->nombre }}</th>
                                <th scope="row">{{ $producto->Descripción }}</th>
                                <th scope="row">
                                    <form action="{{url('seleccionarProductoAsignar')}}" method="post">
                                        <input id="prodId" name="prodId" type="hidden" value="{{ $producto->id }}">
                                        <button type="submit" class="btn btn-link">Asignar a sucursal</button>
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

</div>
@stop