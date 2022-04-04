<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    public function index(){
        return view('actividades');  
    }

    public function actualizar(){
        return view('actualizar');
    }

    public function consultar(){
        return view('consultar');
    }

    public function eliminar(){
        return view('eliminar');
    }

    public function registrar(){
        return view('registrar');
    }

    public function guardarFormulario(Request $request){
        //Logica de codigo
        $this->validate($request, [
            'idProducto' => 'required',  
            'codigoStock' => 'required',
            'nombreStock' => 'required',
            'categoriaStock' => 'required',
            'sucursalStock' => 'required',
            'descripcionStock' => 'required',
            'cantidadStock' => 'required|integer',
            'precioStock' => 'required|integer',
        ]);

        return '<h1>Registro: </h1>'
                .'<p><b>ID:</b> '.$request->input("idProducto").'</p>'
                .'<p><b>Código:</b> '.$request->input("codigoStock").'</p>'
                .'<p><b>Nombre:</b> '.$request->input("nombreStock").'</p>'
                .'<p><b>Categoría:</b> '.$request->input("categoriaStock").'</p>'
                .'<p><b>Sucursal:</b> '.$request->input("sucursalStock").'</p>'
                .'<p><b>Descripción:</b> '.$request->input("descripcionStock").'</p>'
                .'<p><b>Cantidad:</b> '.$request->input("cantidadStock").'</p>'
                .'<p><b>Precio:</b> $'.$request->input("precioStock").'</p>';
    }

    public function formularioConsultar(Request $request){

        $this->validate($request,[
            'codigoConsulta' => 'required',
            'nombreConsulta' => 'required',
            'sucursalConsulta',
        ]);
    }

    public function formularioLogin(Request $request){

        $this->validate($request,[
            'nombreLogin' => 'required',
            'contraseñaLogin' => 'required'

        ]);
    }

    public function formularioActualizar(Request $request){

        $this->validate($request,[
            'nombreActualizar' => 'required',
            'precioActualizar' => 'required | integer',
            'descripcionActualizar' => 'required',

        ]);
    }
    public function formularioEliminar(Request $request){

        $this->validate($request,[
            'eliminarID' => 'required',
        ]);
    }
}   

