<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\ServiciosProfesional;
use App\DisponibilidadProfesional;
use App\MensajeProfesional;
use App\ServiciosXProfesional;
use App\TarifaProfesional;
use App\ReservasProfesional;
use App\FotoProfesional;
use App\UsuarioExtras;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DatePeriod;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{


    public function mostrar(Request $request)
    {

        $usuario = Usuario::select('id')->where('apodo', '=', $request->apodo)->firstOrFail();    

        $perfil = DB::table('usuarios')->join('usuarios_extras', 'usuarios.id', '=', 'usuarios_extras.idusuario')
                                        ->leftJoin('planes_profesional', 'usuarios.id', '=', 'planes_profesional.idprofesional')
                                        ->leftJoin('planes', 'planes_profesional.idplan', '=', 'planes.id')
                                        ->join('countries', 'usuarios.idcountry', '=', 'countries.id')
                                        ->join('states', 'usuarios.idstate', '=', 'states.id')
                                        ->join('cities', 'usuarios.idcity', '=', 'cities.id')
                                        ->where('usuarios.id', '=', $usuario->id)->first();  

        $servicios = ServiciosProfesional::where('estado_servicio', 1)->where('es_admin', 1)->get();
        
        $seleccionados = ServiciosXProfesional::where('idusuario', '=', $usuario->id)->where('idservicio', '!=', NULL)->get();
   
        data_set($perfil, 'edad', $this->calcularEdad($perfil->fecha_nacimiento));

        if( $perfil->tatuaje = 1 ){
            data_set($perfil, 'tatuaje', 'Sí');
        }else{
            data_set($perfil, 'tatuaje', 'No');
        }

        if( $perfil->piercing = 1 ){
            data_set($perfil, 'piercing', 'Sí');
        }else{
            data_set($perfil, 'piercing', 'No');
        }

        if( $perfil->fumador = 1 ){
            data_set($perfil, 'fumador', 'Sí');
        }else{
            data_set($perfil, 'fumador', 'No');
        }

        if( $perfil->sexo = "M" ){
            data_set($perfil, 'sexo', 'Masculino');
        }else{
            data_set($perfil, 'sexo', 'Femenino');
        }

        if( $perfil->idioma = "ES" ){
            data_set($perfil, 'idioma', 'Español');
        }else{
            data_set($perfil, 'idioma', 'Ingles');
        }

        if( $perfil->orientacion = "HETE" ){
            data_set($perfil, 'orientacion', 'Heterosexual');
        }else if( $perfil->orientacion = "LESB" ){
            data_set($perfil, 'orientacion', 'Lesbiana');
        }else if( $perfil->orientacion = "TRAN" ){
            data_set($perfil, 'orientacion', 'Transexual');
        }else if( $perfil->orientacion = "HOMO" ){
            data_set($perfil, 'orientacion', 'Homosexual');
        }else {
            data_set($perfil, 'orientacion', 'Bisexual');
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

        $fotos = FotoProfesional::where('idusuario', '=', $usuario->id )->orderBy('orden','asc')->get();


        $valoraciones = DB::table('valoracion_profesional as valo')->join('criterios_valoracion as cri', 'valo.idcriterio', '=', 'cri.id')
                                ->select('cri.nombre_criterio', DB::raw(' ROUND( AVG(valo.puntuacion), 1) as puntuacion, CAST(ROUND( AVG(valo.puntuacion), 0) AS UNSIGNED) as puntuacion_int ') )
                                ->where('idprofesional', $usuario->id )
                                ->groupBy('valo.idcriterio')->get();

        $reservas = ReservasProfesional::where('idprofesional', $usuario->id )->count();

        $registradas =  DB::table('valoracion_profesional')->where('idprofesional', $usuario->id )->select('idreserva')->groupBy('idreserva')->get();

        $totalRanking = 0;

        $ranking = 0;
        $ranking_html = "";

        if(count($registradas) > 0){

            foreach($valoraciones as $valor){

                $valor->puntuacion_html = $this->checkEstrellas($valor->puntuacion_int);
    
                $totalRanking += $valor->puntuacion_int;
                    
            }
    
            $ranking = $totalRanking / count($valoraciones);
            $ranking_html = $this->checkEstrellas($ranking);

        }
        

        

        $otraschicas = DB::table('usuarios')->join('foto_profesional', 'usuarios.id', '=', 'foto_profesional.idusuario')
                                        ->where('foto_profesional.orden', '=', 0)
                                        ->select('usuarios.id', 'nombre','apodo','url_foto')->inRandomOrder()->take(8)->get();
        
              
        return view('perfil', compact('perfil', 'servicios', 'personalizados','fotos','valoraciones', 'reservas', 'registradas', 'ranking' , 'ranking_html', 'otraschicas' ));
        

    }
    

    public function tarifas(Request $request)
    {

        $idusuario = Auth::user()->id;
        
        $tarifas = Usuario::where('apodo', '=', $request->apodo)->firstOrFail()->tarifas()->get();

        $usuario = UsuarioExtras::join('usuarios', "usuarios_extras.idusuario", "=", "usuarios.id")->where('usuarios.apodo', '=', $request->apodo)->first('tipo_moneda');

        if($usuario->tipo_moneda == "PEN"){
            $simbolo_moneda = "S/";
        }else if($usuario->tipo_moneda == "USD"){
            $simbolo_moneda = "$";
        }else{
            $simbolo_moneda = "€";
        }

        return ['tarifas' => $tarifas, 'tipo_moneda' => $usuario->tipo_moneda, 'simbolo_moneda' => $simbolo_moneda ];  

    }

    public function horarios(Request $request)
    {

        //$idprofesional 

        $reservas = [];
        $available_slots = [];

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

        if($disponibilidad){

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

        }

        

        return ['horarios' => $available_slots, 'reservas' => $reservas];  

    }

    public function buscarRangos($desde, $hasta){


    }

    public function enviarMensaje(Request $request)
    {
        
        $mensaje = new MensajeProfesional();
        $mensaje->idprofesional = $request->idprofesional;
        $mensaje->idusuario = $request->idusuario;
        $mensaje->parent_id = NULL;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save(); 

        //::where('apodo', '=', $request->apodo)->firstOrFail()->disponibilidades()->get();        

        return ['disponibilidad' => "Se envio el mensaje"];  

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

    public function checkEstrellas($cantidad){

        $html = "";

        for ($x=0; $x < $cantidad; $x++) {
            
            $html .= "<i class='icon-star'></i>";
            
        }

        return $html;

    }


    
}
