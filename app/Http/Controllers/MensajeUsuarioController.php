<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Usuario;
use App\MensajeProfesional;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MensajeUsuarioController extends Controller
{
    public function mostrar()
    {
        return view('forms-perfil-usuario.mensajes-usuario');
    }

  
    public function listar(Request $request)
    {

        $idusuario = Auth::user()->id;
      
        $mensajes = DB::table('mensaje_profesional')->join('usuarios', 'mensaje_profesional.idusuario', '=', 'usuarios.id')
                                                    ->leftjoin('planes_profesional', 'planes_profesional.idprofesional', '=', 'usuarios.id')
                                                    ->leftjoin('planes', 'planes.id', '=', 'planes_profesional.idplan')
                                                    ->where('mensaje_profesional.idusuario', $idusuario )
                                                    ->select('mensaje_profesional.id', 'mensaje_profesional.idprofesional', DB::raw("CONCAT(planes.tipo_usuario, ' ', planes.nombre_plan) as nombre_plan"), 'mensaje_profesional.idusuario','usuarios.nombre', 'usuarios.email','usuarios.celular','mensaje_profesional.mensaje', 'mensaje_profesional.es_leido', DB::raw("DATE_FORMAT( mensaje_profesional.created_at, '%d/%m/%Y a las %H:%i:%s') as enviado_el"), DB::raw(" '' as responder"), DB::raw(" 0 as esActivo") )
                                                    ->where('mensaje_profesional.parent_id','=', NULL)
                                                    ->get();

        foreach ($mensajes as $mensaje) {

            $mensaje->respuestas = DB::table('usuarios')->select('mensaje_profesional.id','mensaje_profesional.idusuario','usuarios.nombre', 'usuarios.email','usuarios.celular','mensaje_profesional.mensaje', DB::raw("DATE_FORMAT(mensaje_profesional.created_at, '%d/%m/%Y - %H:%i:%s') as enviado_el"))
                                                        ->join('mensaje_profesional', 'usuarios.id', '=', 'mensaje_profesional.idusuario')
                                                        ->where('mensaje_profesional.parent_id','=',  $mensaje->id)
                                                        ->orderBy('mensaje_profesional.created_at','desc')
                                                        ->get();  

        }

        return ['mensajes' => $mensajes];
  
    }

    public function enviarMensaje(Request $request)
    {

        $idusuario = Auth::user()->id;

        $profesional = Usuario::where('apodo', $request->apodo)->select('id')->first();
        
        $mensaje = new MensajeProfesional();
        $mensaje->parent_id = NULL;
        $mensaje->idprofesional = $profesional->id;
        $mensaje->idusuario = $idusuario;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->es_leido = 0;
        $mensaje->save();

        return ['mensaje' => 'Mensaje enviado correctamente'];

    }

   
    public function responder(Request $request)
    {
        
        $mensaje = new MensajeProfesional();
        $mensaje->parent_id = $request->parent_id;
        $mensaje->idprofesional = $request->idprofesional;
        $mensaje->idusuario = $request->idusuario;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->es_leido = 0;
        $mensaje->save();

        return ['mensaje' => 'Mensaje enviado correctamente'];

    }


    public function eliminar(Request $request)
    {
        
        MensajeProfesional::where('parent_id', '=', $request->id)->delete();
        MensajeProfesional::where('id', '=', $request->id)->delete();

        return ['mensaje' => 'Mensaje eliminado satisfactoriamente'];

    }
    
}
