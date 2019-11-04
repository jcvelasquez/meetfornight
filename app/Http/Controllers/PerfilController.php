<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\ServiciosProfesional;
use App\DisponibilidadProfesional;
use App\ServiciosXProfesional;
use App\TarifaProfesional;
use App\ReservasProfesional;
use App\FotoProfesional;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;

class PerfilController extends Controller
{


    public function mostrar(Request $request)
    {

        $usuario = Usuario::select('id')->where('apodo', '=', $request->apodo)->firstOrFail();    

        $perfil = DB::table('usuarios')->join('usuarios_extras', 'usuarios.id', '=', 'usuarios_extras.idusuario')
        ->where('usuarios.id', '=', $usuario->id)
        ->get();  

        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();
        $seleccionados = ServiciosXProfesional::where('idusuario', '=', $usuario->id)->where('idservicio', '!=', NULL)->get();

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
        $personalizados = ServiciosXProfesional::where('idservicio', NULL)->where('idusuario', '=', $usuario->id)->get();

        foreach ($personalizados as $serv_pers) {

            data_set($serv_pers, 'es_marcado', '1');
            
        }

        $fotos = FotoProfesional::where('idusuario', '=', $usuario->id)->orderBy('orden','asc')->get();
       
        return view('perfil', compact('perfil', 'servicios', 'personalizados','fotos'));

    }


    public function disponibilidad(Request $request)
    {
        
            $disponibilidad = Usuario::where('apodo', '=', $request->apodo)->firstOrFail()->disponibilidades()->get();

            return ['disponibilidad' => $disponibilidad];  

    }

    public function tarifas(Request $request)
    {

        $tarifas = Usuario::where('apodo', '=', $request->apodo)->firstOrFail()->tarifas()->get();

        return ['tarifas' => $tarifas];  
    }

    public function horarios(Request $request)
    {

        //FECHA SELECCIONADA DEL FRONT
        $fechaselec = $request->fechaselec;
        
        //MINUTOS
        $duracion = 'PT' . $request->tiempo . 'M';

        $hoy = new DateTime;

        //OBTENGO EL NUMERO DE DIA DE LA FECHA SELECCIONADA
        $fechaselecDate = new DateTime($fechaselec);

        //OBTENGO SI LA FECHA SELECCIONADA ES DEL DIA DE HOY
        if($hoy->diff($fechaselecDate)->days === 0){
            $fechaEsHoy = true;
        }else{
            $fechaEsHoy = false;
        }


        switch($fechaselecDate->format('N')){

            case 1: $day = 'LUNES';
                    break;
            case 2: $day = 'MARTES';
                    break;
            case 3: $day = 'MIERCOLES';
                    break;
            case 4: $day = 'JUEVES';
                    break;
            case 5: $day = 'VIERNES';
                    break;
            case 6: $day = 'SABADO';
                    break;
            case 7: $day = 'DOMINGO';
                    break;
        }

        $disponibilidad = Usuario::where('apodo', '=', $request->apodo)->firstOrFail()->disponibilidades()->where('dia', '=', $day)->first();

        //INICIO Y FIN DE SERVICIO
        $desde = new DateTime($fechaselec." ".$disponibilidad->desde);
        $hasta = new DateTime($fechaselec." ".$disponibilidad->hasta);

        if($fechaEsHoy){
            $timenow = new DateTime($fechaselec." ".date('H:i:s'));
        }else{
            $timenow = new DateTime($fechaselec." ".$disponibilidad->desde);
        }

        //ANTICIPACION PARA PEDIR EL SERVICIO
        //$timenow->add(new DateInterval('PT0M'));

        //TIEMPO DEL SERVICIO
        $interval = new DateInterval($duracion);

        $time_slots = array();
        //$time_slots = array( '17:30' => '18:30', '19:30' => '21:30' );

        $available_slots = array();

        $periodos = new DatePeriod($desde, $interval, $hasta);

        //OBTENGO LOS HORARIOS RESERVADOS PARA ESE DIA
        $reservas = ReservasProfesional::where('idprofesional', '=', 34)->where('es_aceptada', '=', 1)->get(['desde','hasta']);


        foreach($periodos as $time) {

            $desde_slot = $fechaselec." ".$time->format('H:i');

            if ($timenow > $time) {
                continue;
            }                   

            
                        
            $hasta_slot = $time->add($interval);

            /*if(array_key_exists($timeslot, $time_slots)) {
                $available_slots[] = array('desde' => $timeslot, 'hasta' => 'FULL'); 
                continue;
            }*/  

            $available_slots[] = array('id' => uniqid(), 'desde' => $desde_slot, 'hasta' => $fechaselec." ".$hasta_slot->format('H:i'));
            
        }

        return ['horarios' => $available_slots, 'reservas' => $reservas];  

    }

    public function buscarRangos($desde, $hasta){


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


    
}
