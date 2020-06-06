<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\BoosterProfesional;
use App\CreditoProfesional;
use App\FrecuenciaBooster;
use Carbon\Carbon;



class BoosterProfesionalController extends Controller
{
   
    public function mostrar(){
        return view('forms-perfil-profesional.booster-profesional');
    }
    
    public function listar(Request $request)
    {
            $idprofesional = Auth::user()->id;

            $configuracion = BoosterProfesional::where('idprofesional', $idprofesional)->firstOrCreate(
                ['idprofesional' => $idprofesional],
                ['idprofesional' => $idprofesional, 'frecuencia' => 'DESACTIVADO', 'intervalo' => '15m','desactivarNoche' => 0]
            );

            $creditos = (int) CreditoProfesional::where('idprofesional', $idprofesional)->sum('cantidad_creditos');

            $boosters = $creditos / 0.25;
            
            return ['configuracion' => $configuracion,'creditos' => $creditos, 'boosters' => $boosters];

    }


    

    
    public function actualizar(Request $request)
    {
        //

        $idprofesional = Auth::user()->id;

        $booster = BoosterProfesional::find($request->id);
        $booster->idprofesional = $idprofesional;
        $booster->frecuencia = $request->frecuencia;
        $booster->intervalo = $request->intervalo;
        $booster->desactivarNoche = $request->desactivarNoche;
        $booster->save();

        return ['mensaje' => 'Se actualizó la configuración correctamente.'];

        
    }

  
    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
}
