<?php

namespace App\Http\Controllers;

use App\FrecuenciaBooster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use DateTime;

class FrecuenciaBoosterController extends Controller
{
    

    public function listar(Request $request)
    {
       
        $idprofesional = Auth::user()->id;

        $frecuencia = FrecuenciaBooster::where('idprofesional', '=', $idprofesional)->orderBy('fecha_booster','desc')->get();
        return ['frecuencia' => $frecuencia];  

    }

    public function agregar(Request $request)
    {
       
        $idprofesional = Auth::user()->id;

        $fecha_formato = date("Y-m-d", strtotime($request->fecha) );

        $frecuencia = new FrecuenciaBooster();
        $frecuencia->idprofesional = $idprofesional;
        $frecuencia->fecha_booster = $fecha_formato." ".$request->hora.":00";
        $frecuencia->save();

        return ['mensaje' => 'La frecuencia del booster se grabó correctamente.'];  

    }

    


    public function eliminar(Request $request)
    {
        //
        $id = $request->id;
        FrecuenciaBooster::where('id', '=', $id)->delete(); 
        return Response::json(['mensaje' => 'Registro eliminado correctamente'], 200);

    }

   
}
