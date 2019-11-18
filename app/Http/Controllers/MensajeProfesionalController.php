<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use App\MensajeProfesional;


class MensajeProfesionalController extends Controller
{
  
    public function mostrar()
    {
        return view('forms-perfil-profesional.mensajes-profesional');
    }

  
    public function listar(Request $request)
    {

        $idprofesional = Auth::user()->id;

        $mensajes = MensajeProfesional::where('idprofesional', $idprofesional)->join('usuarios', 'usuarios.id', '=', 'mensaje_profesional.idusuario')->select('mensaje_profesional.id','mensaje_profesional.idprofesional','mensaje_profesional.idusuario','usuarios.nombre', 'usuarios.email','usuarios.celular','mensaje_profesional.mensaje','mensaje_profesional.created_at')->where('mensaje_profesional.parent_id','=', NULL)->get();

        foreach ($mensajes as $mensaje) {

            $mensaje->respuestas = DB::table('usuarios')->select('mensaje_profesional.id','mensaje_profesional.idusuario','usuarios.nombre', 'usuarios.email','usuarios.celular','mensaje_profesional.mensaje', DB::raw("DATE_FORMAT(mensaje_profesional.created_at, '%d/%m/%Y - %H:%i:%s') as enviado_el"))->join('mensaje_profesional', 'usuarios.id', '=', 'mensaje_profesional.idusuario')->where('mensaje_profesional.idprofesional', '=', $idprofesional)->where('mensaje_profesional.parent_id','=',  $mensaje->id)->orderBy('mensaje_profesional.created_at','desc')->get();  

        }

        return ['mensajes' => $mensajes];
  
    }

   
    public function responder(Request $request)
    {
        
        $mensaje = new MensajeProfesional();
        $mensaje->parent_id = $request->parent_id;
        $mensaje->idprofesional = $request->idprofesional;
        $mensaje->idusuario = $request->idusuario;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save();

        return Response::json(['mensaje' => 'Mensaje enviado correctamente'], 200);

    }


    public function eliminar(Request $request)
    {
        
        MensajeProfesional::where('parent_id', '=', $request->id)->delete();
        MensajeProfesional::where('id', '=', $request->id)->delete();

        return Response::json(['mensaje' => 'Mensaje eliminado satisfactoriamente'], 200);

    }
}
