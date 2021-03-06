@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Registrar nuevo Producto</h1>
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
                    <label for="">CODIGO</label>
                    <input type="text" name="codigoStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">NOMBRE</label>
                    <input type="text" name="nombreStock" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">CATEGORIA</label>
                    <select name="categoriaStock" class="form-select">
                        <option selected value="">-Seleccione categoría-</option>
                        <option value="1">SUV</option>
                        <option value="2">Sedán</option>
                        <option value="3">City Car</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">DESCRIPCION</label>
                    <input type="text" name="descripcionStock" class="form-control">
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