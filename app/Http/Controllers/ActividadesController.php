<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        return '<h1>Registrado: </h1>'
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

        return '<h1>Consulta con exito: </h1>'
                .'<p><b>Código:</b> '.$request->input("codigoConsulta").'</p>'
                .'<p><b>Nombre:</b> '.$request->input("nombreConsulta").'</p>'
                .'<p><b>Sucursal:</b> '.$request->input("sucursalConsulta").'</p>';
    }

    public function formularioLogin(Request $request){

        $this->validate($request,[
            'nombreLogin' => 'required',
            'contraseñaLogin' => 'required'

        ]);

        return '<h1>Login: </h1>'
                .'<p><b>Nombre de usuario:</b> '.$request->input("nombreLogin").'</p>'
                .'<p><b>Contraseña:</b> '.$request->input("contraseñaLogin").'</p>';
            
    }

    public function formularioActualizar(Request $request){

        $this->validate($request,[
            'nombreActualizar' => 'required',
            'precioActualizar' => 'required | integer',
            'descripcionActualizar' => 'required',
        ]);

        return '<h1>Actualizado: </h1>'
                .'<p><b>Nombre:</b> '.$request->input("nombreActualizar").'</p>'
                .'<p><b>Precio:</b> '.$request->input("precioActualizar").'</p>'
                .'<p><b>Descripción:</b> '.$request->input("descripcionActualizar").'</p>';
    }

    public function formularioEliminar(Request $request){

        $this->validate($request,[
            'eliminarID' => 'required',
        ]);

        return '<h1>Eliminado: </h1>'
                .'<p><b>Id:</b> '.$request->input("eliminarID").'</p>';
    }
    
}   

