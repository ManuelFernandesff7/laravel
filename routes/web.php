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
use App\Estado;
use App\Ciudad;

Route::get('/', function () {
    $ciudades = App\Estado::find(1)->ciudades;
     $estados = Estado::all();
     $ciudad = App\Ciudad::find(1);
     $estado_origen=$ciudad->estado;
    return view('welcome')->with('estados',$estados)->with('ciudad',$ciudades)->with('origen',$estado_origen);
});
Route::get('prueba', function () {
     $estados = Estado::all();
    echo $estados[0]->id.$estados[0]->estado;
});
Route::get('send_curriculum', function () {
    
    echo 'sube curriculum';
});

Route::get('user', 'UserController@index');