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

        return 'registro:'.$request->input("nombre");
    }

    public function formularioConsultar(Request $request){

        $this->validate($request,[
            'codigoConsulta' => 'required',
            'nombreConsulta' => 'required',
            'sucursalConsulta' => 'required',
        ]);
    }
}   

