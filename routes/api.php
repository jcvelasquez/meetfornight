<?php

use Illuminate\Http\Request;
use App\PerfilUsuario;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//PERFILES DE USUARIO
Route::get('/perfilusuario', function(){
    $perfilusuario = PerfilUsuario::get();
    return $perfilusuario;
});

Route::post('/perfilusuario', function(Request $request){

    $perfilusuario = new PerfilUsuario;
    $perfilusuario->nombre = $request->input('nombre');
    $perfilusuario->apodo = $request->input('apodo');
    $perfilusuario->email = $request->input('email');
    $perfilusuario->clave = $request->input('clave');
    $perfilusuario->fecha_nacimiento = $request->input('fecha_nacimiento');
    $perfilusuario->sexo = $request->input('sexo');
    $perfilusuario->nacionalidad = $request->input('nacionalidad');
    $perfilusuario->idioma = $request->input('idioma');
    $perfilusuario->estado = $request->input('estado');
    $perfilusuario->save();

    return 'Usuario creado';

});

