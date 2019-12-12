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
Route::get('/empleados/{id}', 'EmpleadoController@show')->name('empleados.show');

/*
|Rutas para cosas del apartado proyectos
*/
Route::get('/proyectos', 'ProyectoController@index')->name('proyecto.index');

/*
|Rutas para cosas del apartadod departamentos
*/
Route::get('/departamentos', 'DepartamentoController@index')->name('departamentos.index');


/*
|

Route::get('proyectos', 'ProyectoController@index')->name('proyectos.index');
Route::get('proyectos/create', 'ProyectoController@create')->name('proyectos.create');
Route::post('photos', 'ProyectoController@store')->name('proyectos.store');
Route::get('proyectos/{id}', 'ProyectoController@show')->name('proyectos.show');
Route::get('proyectos/{id}/edit', 'ProyectoController@edit')->name('proyectos.edit');
Route::get('proyectos/{id}', 'ProyectoController@update')->name('proyectos.update');
Route::get('proyectos/{id}', 'ProyectoController@delete')->name('proyectos.destroy');
*/