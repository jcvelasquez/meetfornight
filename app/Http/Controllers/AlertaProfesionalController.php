<?php

namespace App\Http\Controllers;

use App\AlertaProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AlertaProfesionalController extends Controller
{

    
    public function list(Request $request)
    {

        $alertas = DB::table('alerta_profesional')->join('usuarios', 'alerta_profesional.idusuario', '=', 'usuarios.id')
                                        ->select('alerta_profesional.*')
                                        ->orderBy('id', 'desc')
                                        ->get();

        return ['alertas' => $alertas];  

    }



    public function store(Request $request)
    {

        $alerta = new AlertaProfesional;
        $alerta->idusuario = Auth::user()->id;
        $alerta->nombre = $request->nombre;
        $alerta->apellido = $request->apellido;
        $alerta->idalerta = $request->idalerta;
        $alerta->celular = $request->celular;
        $alerta->email = $request->email;
        $alerta->razon = $request->razon;
        $alerta->created_at = new \DateTime();
        $alerta->save();

       // $tarifa = TarifaProfesional::create($validatedData);

        return ['mensaje' => 'Alerta registrada correctamente', 'alerta' => $alerta];

    }


   

}
