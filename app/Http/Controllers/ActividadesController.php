<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal_Producto;
use App\Models\Producto;
use Illuminate\Support\Facade\DB;

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
        $productos = Sucursal_Producto::get()
            ->load('sucursal')
            ->load('producto');

        return view('consultar', [
            'sucursal_productos' => $productos
        ]);
    }

    public function eliminar(){
        $productos = Sucursal_Producto::get()
            ->load('sucursal')
            ->load('producto');

        return view('eliminar', [
            'sucursal_productos' => $productos
        ]);
    }

    public function registrar(){
        return view('registrar');
    }

    public function asignar(){
        $productos = Producto::get();

        return view('tablaAsignar', [
            'productos' => $productos
        ]);
    }

    

    public function guardarFormulario(Request $request){
        //Logica de codigo
        $this->validate($request, [
            'codigoStock' => 'required',
            'nombreStock' => 'required',
            'categoriaStock' => 'required',
            'descripcionStock' => 'required',
        ]);

        //creamos
        $producto = new Producto();
        $producto->codigo = $request->codigoStock;
        $producto->nombre = $request->nombreStock;
        $producto->descripcion = $request->descripcionStock;
        $producto->categoria_id = $request->categoriaStock;
        $producto->activo = 1;
        $producto->save();

        return view('registrar');
    }

    public function formularioConsultar(Request $request){

        $buscarPor = $request->buscarProductoPor;
        $operador = '=';
        $termino = $request->codigoConsulta;
        $sucursal = $request->sucursalConsulta;

        if ($request->buscarProductoPor == 'nombre') {
            $operador = 'like';
            $termino = '%'.$request->codigoConsulta.'%';
        }

        $sucursal_productos = Sucursal_Producto::whereRelation('producto', $buscarPor, $operador, $termino)
            ->get()
            ->load('sucursal')
            ->load('producto')
            ->when($sucursal, function ($query, $sucursal) {
                return $query->where('sucursal_id', '=', $sucursal);
            });

        return view('consultar', [
            'sucursal_productos' => $sucursal_productos
        ]);
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

    public function consultaEliminar(Request $request){

        $this->validate($request,[
            'codigoConsultaEliminar' => 'required',
        ]);

        $codigo = $request->codigoConsultaEliminar;
        $sucursal = $request->sucursalConsultaEliminar;

        $sucursal_productos = Sucursal_Producto::whereRelation('producto', 'codigo', '=', $codigo)
            ->get()
            ->load('sucursal')
            ->load('producto')
            ->when($sucursal, function ($query, $sucursal) {
                return $query->where('sucursal_id', '=', $sucursal);
            });

        return view('eliminar', [
            'sucursal_productos' => $sucursal_productos
        ]);
    }

    public function eliminarProductoDeSucursal(Request $request){

        $prodId = $request->prodId;

        Sucursal_Producto::where('id', $prodId)->delete();

        $productos = Sucursal_Producto::get()
            ->load('sucursal')
            ->load('producto');

        return view('eliminar', [
            'sucursal_productos' => $productos
        ]);
    }

    public function darDeBajaProducto(Request $request){

        $prodId = $request->prodId;

        Sucursal_Producto::where('producto_id', $prodId)->delete();

        Producto::where('id', $prodId)->update(['activo' => 0]);

        $productos = Sucursal_Producto::get()
            ->load('sucursal')
            ->load('producto');

        return view('eliminar', [
            'sucursal_productos' => $productos
        ]);
    }

    public function eliminarProducto(Request $request){

        $prodId = $request->prodId;

        Sucursal_Producto::where('producto_id', $prodId)->delete();

        Producto::where('id', $prodId)->delete();

        $productos = Sucursal_Producto::get()
            ->load('sucursal')
            ->load('producto');

        return view('eliminar', [
            'sucursal_productos' => $productos
        ]);
    }

    public function seleccionarProductoAsignar(Request $request){

        $prodId = $request->prodId;

        $productos = Producto::where('id', $prodId)->get();

        return view('asignar', [
            'productos' => $productos
        ]);
    }

    public function guardarProductoSucursal(Request $request){

        //Logica de codigo
        $this->validate($request, [
            'prodId' => 'required',
            'prodSucursal' => 'required',
            'prodCantidad' => 'required',
            'prodPrecio' => 'required',
        ]);

        //creamos
        $sucursalProducto = new Sucursal_Producto();
        $sucursalProducto->sucursal_id = $request->prodSucursal;
        $sucursalProducto->producto_id = $request->prodId;
        $sucursalProducto->precio = $request->prodPrecio;
        $sucursalProducto->stock = $request->prodCantidad;
        $sucursalProducto->save();

        $productos = Producto::get();

        return view('tablaAsignar', [
            'productos' => $productos
        ]);
    }
}   

