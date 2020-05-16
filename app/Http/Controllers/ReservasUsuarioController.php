<?php

namespace App\Http\Controllers;

use App\ReservasProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasUsuarioController extends Controller
{
    //

    public function mostrar()
    {
        //
        return view('forms-perfil-usuario.reservas-usuarios');
    }

    public function listar()
    {
        //
        $idusuario = Auth::user()->id;
        
        $reservas = ReservasProfesional::where('idusuario', '=', $idusuario)->with('profesional')->get();

        return ['reservas' => $reservas];
        
    }


}
