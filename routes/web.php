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


//Ruta INDEX
Route::get('/','PrincipalController@index')->name('index');

//Rutas Agentes
Route::get('/agentes','AgentesController@index')->name('agentes');
Route::post('/agentes','AgentesController@store')->name('store');
Route::get('/agentes/{fila}/editar_agente','AgentesController@edit')->name('edit_agente');
Route::patch('/agentes/{fila}','AgentesController@update')->name('update_agente');
Route::delete('agentes/{fila}','AgentesController@destroy')->name('destroy_data');

//Rutas Ejecutores
Route::get('/ejecutores','EjecutoresController@index')->name('ejecutores');
Route::post('/ejecutores','EjecutoresController@store')->name('ejec_store');
Route::get('/ejecutores/{fila}/editar_ejecutor','EjecutoresController@edit')->name('edit_ejec');
Route::patch('/ejecutores/{fila}','EjecutoresController@update')->name('update_ejecutor');
Route::get('/asignar_ejecutor','EjecutoresController@asig_ejecutor')->name('asig_ejecutor');
Route::delete('ejecutores/{fila}','EjecutoresController@destroy')->name('destroy_ejec');


//Rutas Criminales
Route::get('/criminales','CriminalesController@index')->name('criminales');
Route::get('/criminales_registro','CriminalesController@registro')->name('registro');
Route::post('/criminales','CriminalesController@store')->name('crimi_store');

//Rutas Casos
Route::get('/casos','CasosController@index')->name('casos');
Route::get('/reg_casos','CasosController@reg_casos')->name('reg_casos');
