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

//Rutas Ejecutores
Route::get('/ejecutores','EjecutoresController@index')->name('ejecutores');

//Rutas Criminales
Route::get('/criminales','CriminalesController@index')->name('criminales');
