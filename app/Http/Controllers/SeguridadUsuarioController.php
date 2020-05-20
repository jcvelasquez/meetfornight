<?php

namespace App\Http\Controllers;

use App\SeguridadUsuario;
use App\UsuarioExtras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeguridadUsuarioController extends Controller
{
   

    private $fotos_usuarios_path;

    public function __construct()
    {
        $this->fotos_usuarios_path = public_path('fotos_usuarios');

        $this->middleware(['auth','verified']);
    }
    
    public function mostrar()
    {
        return view('forms-perfil-usuario.seguridad-usuario');
    }

   
    public function listar(Request $request)
    {

        $idusuario = Auth::user()->id;

        $archivos = SeguridadUsuario::where("seguridad_usuario.idusuario","=",$idusuario)->get();
        $extras = UsuarioExtras::where("usuarios_extras.idusuario","=",$idusuario)->first("seguridad","celular");

        return ["archivos" => $archivos, "seguridad" => $extras->seguridad];


    }

    public function eliminar(Request $request)
    {
          
        $idusuario = Auth::user()->id;

        $idfoto = $request->idfoto;

        $uploaded_image = $this->fotos_usuarios_path."/".$request->url;
 
        if (file_exists($uploaded_image)) {
            unlink($uploaded_image);
        }

        SeguridadUsuario::where('id', '=', $idfoto)->delete();

        $usuario = UsuarioExtras::where("idusuario", $idusuario)->first();
        $usuario->seguridad = 0;
        $usuario->save();
 
        return ['mensaje' => 'Se elimino el archivo de su perfil de seguridad.'];


    }


    //FUNCION PARA SUBIR LAS FOTOS DEL PROFESIONAL DESDE EL FORMULARIO DE CREAR CUENTA
    public function subir(Request $request)
    {

        $idusuario = Auth::user()->id;

        $image = $request->file('file');
        $random = sha1(date('YmdHis') . uniqid());
        $save_name = $random . '.' . $image->getClientOriginalExtension();
            
        if ( $image->move( $this->fotos_usuarios_path ,$save_name) ) {

            $seguridad = new SeguridadUsuario();
            $seguridad->idusuario =  $idusuario;
            $seguridad->url_foto = $save_name;
            $seguridad->tipo_foto = $request->tipo_foto;
            $seguridad->save();
            
            return [ 'status' =>  'success'];

        } else {     
            return [ 'status' =>  'error'];
        }

    }

    
}
