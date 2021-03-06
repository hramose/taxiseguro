<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');


    Route::get('/listado/{propietario}',"VehiculoController@listado");
    Route::resource("/vehiculo", "VehiculoController");
    Route::resource("/conductor", "ConductorController");
    Route::post('asignar/{vehiculo}/{propietario}',"PropietarioController@asignar");
    Route::get('desasignar/{vehiculo}/{propietario}',"PropietarioController@desasignar");
    Route::resource("/propietario", "PropietarioController");
    Route::resource("/agente", "AgenteController");
});
