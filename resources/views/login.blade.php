@extends('layouts.master')

@section('header')
<h1>ACCESO</h1>
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">CORREO</label>
                        <input type="text" name="correoLogin" class="form-control" placeholder="ingrese correo">
                    </div>
                    <div class="mb-3">
                        <label for="">CONTRASEÑA</label>
                        <br>
                        <input type="password" name="contraseñaLogin" id="" placeholder="Ingrese la contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary" href="http://127.0.0.1:8000/actividades">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

@stop

@section('footer')
<a href="http://127.0.0.1:8000/sucursal">Regresar</a>
<hr>
<a href="http://127.0.0.1:8000/actividades">Actividades</a>
@stop