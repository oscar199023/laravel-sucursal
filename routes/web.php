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

Route::get('/', 'App\Http\Controllers\ActividadesController@index');
Route::get('/actualizar', 'App\Http\Controllers\ActividadesController@actualizar');
Route::get('/consultar', 'App\Http\Controllers\ActividadesController@consultar');
Route::get('/eliminar', 'App\Http\Controllers\ActividadesController@eliminar');
Route::get('/registrar','App\Http\Controllers\ActividadesController@registrar');
Route::get('/asignar','App\Http\Controllers\ActividadesController@asignar');

//guardar Formulario
Route::post('/guardarFormulario',[
    'uses' => 'App\Http\Controllers\ActividadesController@guardarFormulario',
    'as' => 'guardarFormulario'
]);

Route::post('/formularioConsultar',[
    'uses' => 'App\Http\Controllers\ActividadesController@formularioConsultar',
    'as' => 'formularioConsultar'
]);

Route::post('/formularioLogin',[
    'uses' => 'App\Http\Controllers\ActividadesController@formularioLogin',
    'as' => 'formularioLogin'
]);

Route::post('/formularioActualizar',[
    'uses' => 'App\Http\Controllers\ActividadesController@formularioActualizar',
    'as' => 'formularioActualizar'
]);

Route::post('/formularioEliminar',[
    'uses' => 'App\Http\Controllers\ActividadesController@formularioEliminar',
    'as' => 'formularioEliminar'
]);
