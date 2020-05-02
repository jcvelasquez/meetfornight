<?php

namespace App\Http\Controllers;

use App\AlertaProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AlertaProfesionalController extends Controller
{

    
    public function mostrar(){
        return view('forms-perfil-profesional.alerta-profesional');
    }

    public function listar(Request $request)
    {

        $alertas = DB::table('alerta_profesional')->join('usuarios', 'alerta_profesional.idusuario', '=', 'usuarios.id')
                                        ->where('idusuario', Auth::user()->id )
                                        ->select('alerta_profesional.*')
                                        ->orderBy('id', 'desc')
                                        ->get();

        return ['alertas' => $alertas];  

    }

    public function listarAlertasAdmin(Request $request)
    {

        $alertas = DB::table('alerta_profesional')->join('usuarios', 'alerta_profesional.idusuario', '=', 'usuarios.id')
                                        ->select('usuarios.nombre as nombre_usuario','alerta_profesional.*')
                                        ->orderBy('id', 'desc')
                                        ->get();

        return ['alertas' => $alertas];  

    }



    public function registrar(Request $request)
    {

        $alerta = new AlertaProfesional;
        $alerta->idusuario = Auth::user()->id;
        $alerta->tipo_cliente = $request->tipo_cliente;
        $alerta->nombres = $request->nombres;
        $alerta->apellidos = $request->apellidos;
        $alerta->apodo = $request->apodo;
        $alerta->celular = $request->celular;
        $alerta->email = $request->email;
        $alerta->razon = $request->razon;
        $alerta->save();

        return ['mensaje' => 'La alerta se registró correctamente.'];

    }


   

}
