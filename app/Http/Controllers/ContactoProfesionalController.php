<?php

namespace App\Http\Controllers;

use App\UsuarioExtras;
use App\Usuario;
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

  
}
