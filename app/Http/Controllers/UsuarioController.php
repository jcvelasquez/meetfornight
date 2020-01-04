<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\CategoriasProfesional;
use App\FotoProfesional;
use App\BoosterCobrado;
use App\Usuario;
use App\Rol;
use App\Planes;
use App\PlanesProfesional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Hash;

class UsuarioController extends Controller
{
   
    
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function mostrarPerfilProfesionalLogueado(Request $request){

        return view('forms-perfil-profesional.perfil-profesional');

    }

    public function mostrarPerfilUsuarioLogueado(Request $request){

        return view('forms-perfil-usuario.perfil-usuario');

    }


    public function editarDataPerfilProfesional(Request $request){

        $idprofesional = Auth::user()->id;
        
        $usuario = Usuario::where('id', '=', $idprofesional)->with('extras')->first();

        $categorias = Categorias::where('estado_categoria', 1)->get();

        $seleccionados = CategoriasProfesional::where('idprofesional', '=', $idprofesional)->get();

        //SELECCIONADOS
        foreach ($categorias as $cat) {

            if( $this->checkSeleccionado($seleccionados, $cat->id) ){
                data_set($cat, 'es_marcado', 1);
            }else{
                data_set($cat, 'es_marcado', 0);
            }
            
        }

        $usuario->categorias = $categorias;

        return ['usuario' => $usuario];     

    }

    public function checkSeleccionado($seleccionados, $id){

        foreach ($seleccionados as $selec) {
            
            if($selec->idcategoria == $id){
                return true;
                break;
            }
            
        }

        return false;

    }


    public function editarDataUsuario(Request $request)
    {
        return Usuario::findOrFail($request->idusuario);
    }


    public function obtenerUsuarioLogueado()
    {
        return Usuario::where('id','=',Auth::user()->id)->first(['nombre']);
    }




    

}
