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


Auth::routes();

Route::get('/', 'ActividadesController@index');
Route::get('/actualizar', 'ActividadesController@actualizar');
Route::get('/consultar', 'ActividadesController@consultar');
Route::get('/eliminar', 'ActividadesController@eliminar');
Route::get('/registrar','ActividadesController@registrar');
Route::get('/asignar','ActividadesController@asignar');

//guardar Formulario
Route::post('/guardarFormulario',[
    'uses' => 'ActividadesController@guardarFormulario',
    'as' => 'guardarFormulario'
]);

Route::post('/formularioConsultar',[
    'uses' => 'ActividadesController@formularioConsultar',
    'as' => 'formularioConsultar'
]);

Route::post('/formularioLogin',[
    'uses' => 'ActividadesController@formularioLogin',
    'as' => 'formularioLogin'
]);

Route::post('/formularioActualizar',[
    'uses' => 'ActividadesController@formularioActualizar',
    'as' => 'formularioActualizar'
]);

Route::post('/formularioEliminar',[
    'uses' => 'ActividadesController@formularioEliminar',
    'as' => 'formularioEliminar'
]);

Route::post('/asignarFormulario',[
    'uses' => 'ActividadesController@asignarFormulario',
    'as' => 'asignarFormulario'
]);
