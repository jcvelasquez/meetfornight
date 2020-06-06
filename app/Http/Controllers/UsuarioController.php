<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\CategoriasProfesional;
use App\Usuario;
use App\Idiomas;
use App\IdiomasProfesional;
use App\States;
use App\UsuarioExtras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function mostrarPerfilEmpresaLogueado(Request $request){

        return view('forms-perfil-empresa.perfil-empresa');

    }

    public function editarDataUsuario()
    {
        $idusuario = Auth::user()->id;

        $usuario = Usuario::where('id', '=', $idusuario)->with('states')->with('cities')->first();
        
        return ['usuario' => $usuario];     
        
    }


    public function editarDataEmpresa(Request $request)
    {

        $idempresa = Auth::user()->id;

        $usuario = Usuario::where('id', '=', $idempresa)->with('states')->with('cities')->first();

        return ['usuario' => $usuario];     

    }



    
    public function editarDataPerfilProfesional(Request $request){

        $idprofesional = Auth::user()->id;
        $usuario = Usuario::where('id', '=', $idprofesional)->with('extras')->with('states')->with('cities')->first();
        $categorias = Categorias::where('estado_categoria', 1)->get();
        $idiomas = Idiomas::where('estado_idioma', 1)->get();

        //$States = States::where()

        $cat_seleccionados = CategoriasProfesional::where('idprofesional', '=', $idprofesional)->get();
        $idi_seleccionados = IdiomasProfesional::where('idprofesional', '=', $idprofesional)->get();      

        //CATEGORIAS SELECCIONADAS
        foreach ($categorias as $cat) {

            if( $this->checkCategoriaSeleccionada($cat_seleccionados, $cat->id) ){
                data_set($cat, 'es_marcado', 1);
            }else{
                data_set($cat, 'es_marcado', 0);
            }
            
        }

        //IDIOMAS SELECCIONADAS
        foreach ($idiomas as $idi) {

            if( $this->checkIdiomaSeleccionado($idi_seleccionados, $idi->id) ){
                data_set($idi, 'es_marcado', 1);
            }else{
                data_set($idi, 'es_marcado', 0);
            }
            
        }

        $usuario->categorias = $categorias;
        $usuario->idiomas = $idiomas;

        return ['usuario' => $usuario];     

    }

    
    public function actualizarDataEmpresa(Request $request)
    {
        $idempresa = Auth::user()->id;

        //------------------------------
        //ACTUALIZAR USUARIO
        //------------------------------
        $usuario = Usuario::find( $idempresa );
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->celular = $request->celular;
        $usuario->idcountry = $request->idcountry;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->save();

        return ['mensaje' => 'Los datos fueron actualizados correctamente'];     

    }

    public function actualizarDataUsuario(Request $request)
    {
        $idusuario = Auth::user()->id;

        //------------------------------
        //ACTUALIZAR USUARIO
        //------------------------------
        $usuario = Usuario::find( $idusuario );
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->fecha_nacimiento = Carbon::createFromFormat('d/m/Y', $request->fecha_nacimiento );
        $usuario->sexo = $request->sexo;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->save();

        return ['mensaje' => 'Los datos fueron actualizados correctamente'];     

    }

    public function actualizarDataProfesional(Request $request)
    {

        $idprofesional = Auth::user()->id;

        //------------------------------
        //ACTUALIZAR USUARIO
        //------------------------------
        $usuario = Usuario::find( $idprofesional );
        $usuario->nombre = $request->nombre;
        $usuario->apodo = $request->apodo;
        $usuario->fecha_nacimiento = Carbon::createFromFormat('d/m/Y', $request->fecha_nacimiento );
        $usuario->sexo = $request->sexo;
        $usuario->idcountry = $request->idcountry;
        $usuario->idstate = $request->idstate;
        $usuario->idcity = $request->idcity;
        $usuario->save();

        //------------------------------
        //ACTUALIZAR EXTRAS
        //------------------------------
        $usuarioExtra = UsuarioExtras::find( $idprofesional );
        $usuarioExtra->frase = $request->frase;
        $usuarioExtra->descripcion = $request->descripcion;
        $usuarioExtra->pecho = $request->pecho;
        $usuarioExtra->pene = $request->pene;
        $usuarioExtra->color_ojos = $request->color_ojos;
        $usuarioExtra->color_cabello = $request->color_cabello;
        $usuarioExtra->corte_intimo = $request->corte_intimo;
        $usuarioExtra->estatura = $request->estatura;
        $usuarioExtra->peso = $request->peso;
        $usuarioExtra->orientacion = $request->orientacion;
        $usuarioExtra->tatuaje = $request->tatuaje;
        $usuarioExtra->piercing = $request->piercing;
        $usuarioExtra->fumador = $request->fumador;
        $usuarioExtra->seguridad = $request->seguridad;
        $usuarioExtra->save();

        //------------------------------
        //CATEGORIAS
        //------------------------------

        $categorias = json_decode($request['categorias']);

        //ELIMINO LOS PREVIOS
        CategoriasProfesional::where('idprofesional', $idprofesional )->delete();

        if(!empty($categorias)){
            foreach ($categorias as $cat) {
                if($cat->es_marcado){
                    $catpro = new CategoriasProfesional();
                    $catpro->idprofesional = $idprofesional;
                    $catpro->idcategoria = $cat->id;
                    $catpro->save();
                }
            }
        }
        

        //------------------------------
        //IDIOMAS
        //------------------------------
        $idiomas = json_decode($request['idiomas']);

        //ELIMINO LOS PREVIOS
        IdiomasProfesional::where('idprofesional', $idprofesional )->delete();

        if(!empty($idiomas)){
            foreach ($idiomas as $idi) {
                if($idi->es_marcado){
                    $idiopro = new IdiomasProfesional();
                    $idiopro->idprofesional = $idprofesional;
                    $idiopro->ididioma = $idi->id;
                    $idiopro->save();
                }
            }
        }

        

        return ['mensaje' => "Se actualizo satisfactoriamente el perfil ", 'status' => 'success' ];     
        
    }

    public function checkCategoriaSeleccionada($cat_seleccionados, $id){
        foreach ($cat_seleccionados as $selec) {
            if($selec->idcategoria == $id){
                return true;
                break;
            } 
        }
        return false;
    }

    public function checkIdiomaSeleccionado($idio_seleccionados, $id){
        foreach ($idio_seleccionados as $selec) {
            if($selec->ididioma == $id){
                return true;
                break;
            }        
        }
        return false;
    }


    public function obtenerUsuarioLogueado()
    {
        return Usuario::where('id','=',Auth::user()->id)->first(['nombre']);
    }

    


    

}
