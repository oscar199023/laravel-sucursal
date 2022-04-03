<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{nombre?}/{edad?}', function($nombre= 'oscar', $edad='15'){
    return view('contacto')
        ->with('nombre', $nombre)
        ->with('edad', $edad)
        ->with('frutas', array('Naranja', 'Pera', 'Manzana','Frutilla'));
    
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);


Route::get('/sucursal/{nombre?}', function ($nombre= 'bienvenido') {
    return view('sucursal')
        ->with('nombre', $nombre);
});

Route::get('/login/{nombre?}', function ($nombre = 'entrar') {
    return view('login')
        ->with('nombre', $nombre);
});

Route::get('/actividades/{nombre?}', function ($nombre= 'actividades') {
    return view('actividades')
        ->with('nombre', $nombre);
});

Route::get('/consultar/{nombre?}', function ($nombre= 'consulta') {
    return view('consultar')
        ->with('nombre', $nombre);
});

Route::get('/actualizar/{nombre?}', function ($nombre= 'actualiza') {
    return view('actualizar')
        ->with('nombre', $nombre);
});

Route::get('/eliminar/{nombre?}', function ($nombre= 'elimina') {
    return view('eliminar')
        ->with('nombre', $nombre);
});

Route::get('/registrar/{nombre?}', function ($nombre= 'registra') {
    return view('registrar')
        ->with('nombre', $nombre);
});

Route::get('/actividades', 'App\Http\Controllers\ActividadesController@index');
Route::get('/actividades/actualizar', 'App\Http\Controllers\ActividadesController@actualizar');
Route::get('/actividades/consultar', 'App\Http\Controllers\ActividadesController@consultar');
Route::get('/actividades/eliminar', 'App\Http\Controllers\ActividadesController@eliminar');

Route::get('/actividades/registrar',[
     'uses' => 'App\Http\Controllers\ActividadesController@registrar',
     'as' => 'registrarStock'
]);

//guardar Formulario
Route::post('/guardarFormulario',[
    'uses' => 'App\Http\Controllers\ActividadesController@guardarFormulario',
    'as' => 'guardarFormulario'
]);

Route::post('/formularioConsultar',[
    'uses' => 'App\Http\Controllers\ActividadesController@formularioConsultar',
    'as' => 'formularioConsultar'
]);