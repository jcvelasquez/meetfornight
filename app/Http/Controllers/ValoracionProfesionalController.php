<?php

namespace App\Http\Controllers;

use App\ReservasProfesional;
use App\ValoracionProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ValoracionProfesionalController extends Controller
{

    public function mostrar()
    {
        //
        return view('forms-perfil-profesional.valoracion-profesional');
    }

    public function listar(Request $request)
    {
        //
        
        $valoraciones = DB::table('valoracion_profesional as valo')->join('criterios_valoracion as cri', 'valo.idcriterio', '=', 'cri.id')
                                ->select('cri.nombre_criterio', DB::raw(' ROUND( AVG(valo.puntuacion), 1) as puntuacion, CAST(ROUND( AVG(valo.puntuacion), 0) AS UNSIGNED) as puntuacion_int ') )
                                ->where('idprofesional', Auth::user()->id )
                                ->groupBy('valo.idcriterio')->get();

        $reservas = ReservasProfesional::where('idprofesional', Auth::user()->id )->count();

        $registradas =  DB::table('valoracion_profesional')->where('idprofesional', Auth::user()->id)->select('idreserva')->groupBy('idreserva')->get();


        return ['valoraciones' => $valoraciones, 'reservas_registradas' => $reservas, 'valoraciones_registradas' => $registradas->count() ];
    }



}
