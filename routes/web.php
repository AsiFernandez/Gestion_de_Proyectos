<?php

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

/*
|Rutas para cosas del apartado empleados
*/
Route::get('/empleados', 'EmpleadoController@index')->name('empleado.index');
Route::get('/empleado/{id}', 'EmpleadoController@show')->name('empleado.vista');

/*
|Rutas para cosas del apartado proyectos
*/
Route::get('/proyectos', 'ProyectoController@index')->name('proyecto.index');

/*
|Rutas para cosas del apartadod departamentos
*/
Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos.index');

