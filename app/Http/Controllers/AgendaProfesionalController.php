<?php

namespace App\Http\Controllers;

use App\ReservasProfesional;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaProfesionalController extends Controller
{

    
    public function mostrar()
    {
        return view('forms-perfil-profesional.agenda-profesional');
    }

 
    
    public function listar(Request $request)
    {
        
        
        $idprofesional = Auth::user()->id;
        //$agenda = ReservasProfesional::where('idprofesional', '=', $idprofesional)->whereDate('desde', '>=', Carbon::today()->toDateString() )->with('usuario')->get();
        $agenda = ReservasProfesional::where('idprofesional', '=', $idprofesional)->with('usuario')->get();

        return ['agenda' => $agenda];

    }

   

}
