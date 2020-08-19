<?php

namespace App\Http\Controllers;

use App\DisponibilidadProfesional;
use App\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DisponibilidadProfesionalController extends Controller
{

    public function listar(Request $request)
    {

        //
        if($request->apodo){

            $disponibilidad = Usuario::where('apodo', '=', $request->apodo)->firstOrFail()->disponibilidades()->get();

            return ['disponibilidad' => $disponibilidad ];

        }else{

            $idprofesional = Auth::user()->id;

            $lunes = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'LUNES')->first();
            $martes = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'MARTES')->first();
            $miercoles = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'MIERCOLES')->first();
            $jueves = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'JUEVES')->first();
            $viernes = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'VIERNES')->first();
            $sabado = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'SABADO')->first();
            $domingo = DisponibilidadProfesional::where('idusuario', $idprofesional)->where('dia', 'DOMINGO')->first();


            return ['lunes' => $lunes, 'martes' => $martes, 'miercoles' => $miercoles, 'jueves' => $jueves, 'viernes' => $viernes, 'sabado' => $sabado, 'domingo' => $domingo];

        }

    }



    public function actualizar(Request $request)
    {


    }

    public function store(Request $request)
    {
        //
        $disponibilidad = new DisponibilidadProfesional;
        $disponibilidad->idusuario = Auth::user()->id;
        $disponibilidad->desde = $request->desde;
        $disponibilidad->hasta = $request->hasta;
        $disponibilidad->dia = $request->dia;
        $disponibilidad->save();

        return ['mensaje' => 'Disponibilidad registrado correctamente', 'status' => 'success'];


    }


}
