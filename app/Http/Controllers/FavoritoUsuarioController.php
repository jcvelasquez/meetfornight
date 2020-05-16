<?php

namespace App\Http\Controllers;

use App\FavoritoUsuario;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritoUsuarioController extends Controller
{

    private $fotos_profesional_path;

    public function __construct() 
    {
        $this->fotos_profesional_path = public_path('fotos_profesionales');
    }
     
    public function mostrar()
    {
        return view('forms-perfil-usuario.favoritos-usuario');
    }

    public function agregar(Request $request)
    {

        $idusuario = Auth::user()->id;

        $profesional = Usuario::where('apodo', '=', $request->apodo)->select('id')->firstOrFail();   

        if(FavoritoUsuario::where('idusuario', '=', $idusuario)->where('idprofesional', '=', $profesional->id)->delete()) {
            
            return ["mensaje" => "Se elimino de tus favoritos."];

        }else{
            
            $favorito = new FavoritoUsuario();
            $favorito->idusuario = $idusuario;
            $favorito->idprofesional = $profesional->id;
            $favorito->save();

            return ["mensaje" => "Se agrego correctamente a favoritos"];
            
        }

    }

    public function listar(Request $request)
    {

        $idusuario = Auth::user()->id;

        $favoritos = FavoritoUsuario::join('usuarios','usuarios.id','=','favorito_usuario.idprofesional')
                                    ->join('foto_profesional','favorito_usuario.idprofesional','=','foto_profesional.idusuario')
                                    ->select('usuarios.apodo','usuarios.fecha_nacimiento','foto_profesional.url_foto','usuarios.created_at')
                                    ->where('favorito_usuario.idusuario', '=', $idusuario)
                                    ->paginate(32);   

        
        $ordenados = $favoritos->values()->sortByDesc('created_at');

        $ordenados = $ordenados->values()->all();

        return [
            'pagination' => [
                'total'        => $favoritos->total(),
                'current_page' => $favoritos->currentPage(),
                'per_page'     => $favoritos->perPage(),
                'last_page'    => $favoritos->lastPage(),
                'from'         => $favoritos->firstItem(),
                'to'           => $favoritos->lastItem(),
            ],
            'arUsuarios' => $ordenados,
            'path' => $this->fotos_profesional_path
        ];

            
    }

    
}
