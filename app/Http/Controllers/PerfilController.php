<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\ServiciosProfesional;
use App\DisponibilidadProfesional;
use App\ServiciosXProfesional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function mostrar($id)
    {

        $idusuario = 34;

        $perfil = DB::table('usuarios')->join('usuarios_extras', 'usuarios.id', '=', 'usuarios_extras.idusuario')
        ->where('usuarios.id', '=', $idusuario)
        ->get();

        

        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();
        $seleccionados = ServiciosXProfesional::where('idusuario', '=', $idusuario)->where('idservicio', '!=', NULL)->get();

        //PERFIL
        foreach ($perfil as $per) {
   
            data_set($per, 'edad', $this->calcularEdad($per->fecha_nacimiento));

            if( $per->tatuaje = 1 ){
                data_set($per, 'tatuaje', 'Sí');
            }else{
                data_set($per, 'tatuaje', 'No');
            }

            if( $per->piercing = 1 ){
                data_set($per, 'piercing', 'Sí');
            }else{
                data_set($per, 'piercing', 'No');
            }

            if( $per->fumador = 1 ){
                data_set($per, 'fumador', 'Sí');
            }else{
                data_set($per, 'fumador', 'No');
            }

            if( $per->sexo = "M" ){
                data_set($per, 'sexo', 'Masculino');
            }else{
                data_set($per, 'sexo', 'Femenino');
            }

            if( $per->idioma = "ES" ){
                data_set($per, 'idioma', 'Español');
            }else{
                data_set($per, 'idioma', 'Ingles');
            }

            if( $per->orientacion = "HETE" ){
                data_set($per, 'orientacion', 'Heterosexual');
            }else if( $per->orientacion = "LESB" ){
                data_set($per, 'orientacion', 'Lesbiana');
            }else if( $per->orientacion = "TRAN" ){
                data_set($per, 'orientacion', 'Transexual');
            }else if( $per->orientacion = "HOMO" ){
                data_set($per, 'orientacion', 'Homosexual');
            }else {
                data_set($per, 'orientacion', 'Bisexual');
            }


            if( $per->nacionalidad = "PE" ){
                data_set($per, 'nacionalidad', 'Peruana');
            }else if( $per->nacionalidad = "ES" ){
                data_set($per, 'nacionalidad', 'Española');
            }else{
                data_set($per, 'nacionalidad', 'Panameña');
            }
            
        }

        //SELECCIONADOS
        foreach ($servicios as $serv) {

            if( $this->checkSeleccionado($seleccionados, $serv->id) ){
                data_set($serv, 'es_marcado', '1');
            }else{
                data_set($serv, 'es_marcado', '0');
            }
            
        }


        //PERSONALIZADOS
        $personalizados = ServiciosXProfesional::where('idservicio', NULL)->where('idusuario', '=', $idusuario)->get();

        foreach ($personalizados as $serv_pers) {

            data_set($serv_pers, 'es_marcado', '1');
            
        }


        $tarifas = DB::table('tarifa_profesional')->where('tarifa_profesional.idusuario', '=', $idusuario)->orderBy('categoria_tarifa','DESC')->get();

        $disponibilidad = DB::table('disponibilidad_profesional')->where('disponibilidad_profesional.idusuario', '=', $idusuario)->get();
       
        return view('perfil', compact('perfil', 'servicios', 'personalizados', 'tarifas','disponibilidad'));

    }



    public function calcularEdad($nacimiento){


        $diff = date_diff(date_create($nacimiento), date_create(date("Y-m-d")));        

        return $diff->format('%y');

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


    public function show(Perfil $perfil)
    {
        //
    }


    public function edit(Perfil $perfil)
    {
        //
    }


    public function update(Request $request, Perfil $perfil)
    {
        //
    }

    public function destroy(Perfil $perfil)
    {
        //
    }
}
