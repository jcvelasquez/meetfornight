<?php

namespace App\Http\Controllers;

use App\DisponibilidadProfesional;
use App\UsuarioExtras;
use App\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactoProfesionalController extends Controller
{

    public function mostrar()
    {
        //
        return view('forms-perfil-profesional.contacto-profesional');
        
    }

    public function listar(Request $request)
    {
        //

        $idprofesional = Auth::user()->id;
        
        $contacto = Usuario::where('usuarios.id', '=', $idprofesional)->join('usuarios_extras','usuarios_extras.idusuario','=','usuarios.id')->select('usuarios.id','usuarios_extras.web','usuarios.celular','usuarios.tipo_celular','usuarios_extras.tipo_contacto','usuarios_extras.agenda')->first();

        return ['contacto' => $contacto];  

        
    }

    public function actualizar(Request $request)
    {

        $idprofesional = Auth::user()->id;

        //------------------------------
        //ACTUALIZAR USUARIO
        //------------------------------
        $usuario = Usuario::find( $idprofesional );
        $usuario->celular = $request->celular;
        $usuario->tipo_celular = $request->tipo_celular;        
        $usuario->save();

        //------------------------------
        //ACTUALIZAR EXTRAS
        //------------------------------
        $usuarioExtra = UsuarioExtras::find( $idprofesional );
        $usuarioExtra->agenda = $request->agenda;
        $usuarioExtra->tipo_contacto = $request->tipo_contacto;
        $usuarioExtra->web = $request->web;
        $usuarioExtra->save();

        $disponibilidad = json_decode($request['disponibilidad']);

        if(!empty($disponibilidad)){
            foreach ($disponibilidad as $dispo) {
                $dispro = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', $dispo->dia)->first();
                $dispro->desde = Carbon::createFromFormat('G', $dispo->desde )->format('H:i:s');
                $dispro->hasta = Carbon::createFromFormat('G', $dispo->hasta )->format('H:i:s');
                $dispro->save();            
            }
        }

        return ['status' => 'success', "mensaje" => "Los datos se actualizaron correctamente"];  
      
    
    }

  
}
