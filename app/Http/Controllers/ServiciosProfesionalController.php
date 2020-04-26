<?php

namespace App\Http\Controllers;

use App\ServiciosProfesional;
use App\ServiciosXProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;


class ServiciosProfesionalController extends Controller
{

    public function mostrar(){

        return view('forms-perfil-profesional.servicios-profesional');

    }

    public function listar()
    {

        $idusuario = Auth::user()->id;
        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();
        $seleccionados = ServiciosXProfesional::where('idusuario', '=', $idusuario)->where('idservicio', '!=', NULL)->get();

        //SELECCIONADOS
        foreach ($servicios as $serv) {

            if( $this->checkSeleccionado($seleccionados, $serv->id) ){
                data_set($serv, 'es_marcado', 1);
            }else{
                data_set($serv, 'es_marcado', 0);
            }
            
        }


        //PERSONALIZADOS
        $servicios_personalizados = ServiciosXProfesional::where('idservicio', NULL)->where('idusuario', '=', $idusuario)->get();

        foreach ($servicios_personalizados as $serv_pers) {

            data_set($serv_pers, 'es_marcado', 1);
            
        }

        return [ 'servicios' => $servicios, 'servicios_personalizados' => $servicios_personalizados ];  
      

    }

    public function checkSeleccionado($seleccionados, $id){

        foreach ($seleccionados as $selec) {
            
            if($selec->idservicio == $id){
                return true;
                break;
            }
            
        }

        return false;

    }


    
    public function registrar(Request $request)
    {
       
        $servxpro = new ServiciosXProfesional();
        $servxpro->idservicio = NULL;
        $servxpro->idusuario = Auth::user()->id;
        $servxpro->nombre_servicio = $request->nombre_servicio;
        $servxpro->categoria_servicio = $request->categoria_servicio;
        $servxpro->save();

        return ["mensaje" => "Servicio agregado correctamente"];
        
    }

    public function actualizar(Request $request)
    {
       
 
        $servicios = json_decode($request['servicios']);

        ServiciosXProfesional::where('idusuario', Auth::user()->id )->where('idservicio', '!=', NULL )->delete();

        
        if(!empty($servicios)){
            foreach ($servicios as $serv) {
                if($serv->es_marcado){
                    $servxpro = new ServiciosXProfesional();
                    $servxpro->idservicio = $serv->id;
                    $servxpro->idusuario = Auth::user()->id;
                    $servxpro->categoria_servicio = $serv->categoria_servicio;
                    $servxpro->save();
                }
            }
        }

     
        return ["mensaje" => "Los servicios se actualizaron correctamente."];
        
    }
    
    public function eliminar(Request $request)
    {
        //

        if( ServiciosXProfesional::where('idusuario', Auth::user()->id )->where('id', $request->id )->delete() ){
            $mensaje = "Servicio eliminado correctamente";
            $status = "success";
        }else{
            $mensaje = "El servicio no se puede eliminar por estar enlazado a una reserva existente. Comuniquese con el administrador para más información.";
            $status = "error";
        }

        return ["mensaje" => $mensaje, "status" => $status];

    }

}
