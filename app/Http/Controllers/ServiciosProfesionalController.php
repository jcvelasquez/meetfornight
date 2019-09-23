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

    
  
    public function listar()
    {


        $idusuario = Auth::user()->id;
        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();
        $seleccionados = ServiciosXProfesional::where('idusuario', '=', $idusuario)->where('idservicio', '!=', NULL)->get();

        //SELECCIONADOS
        foreach ($servicios as $serv) {

            if( $this->checkSeleccionado($seleccionados, $serv->id) ){
                data_set($serv, 'es_marcado', '1');
            }else{
                data_set($serv, 'es_marcado', '0');
            }
            
        }


        //PERSONALIZADOS
        $servicios_personalizados = ServiciosXProfesional::where('idservicio', NULL)->where('idusuario', '=', $idusuario)->get();

        foreach ($servicios_personalizados as $serv_pers) {

            data_set($serv_pers, 'es_marcado', '1');
            
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


    
    public function create()
    {
        //
    }


    
    public function store(Request $request)
    {
        //
    }


    
    public function show($id)
    {
        //
    }

 
    
    public function edit($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        //
    }


    
    public function destroy($id)
    {
        //
    }
}
