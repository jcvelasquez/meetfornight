<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\MensajeProfesional;


class MensajeProfesionalController extends Controller
{
  
    public function mostrar()
    {
        return view('forms-perfil-profesional.mensajes-profesional');
    }

  
    public function listar(Request $request)
    {

        $idprofesional = Auth::user()->id;

        $mensajes = MensajeProfesional::where('idprofesional', '=', $idprofesional)->where('parent_id','=', NULL)->with('usuario')->get();

       /* $mensajes = DB::table('mensaje_profesional')
                     ->select('*')
                     ->select(DB::raw('select * as respuestas'))
                     //->selectRaw('* AS respuestas WHERE parent_id = mensaje_profesional.id')
                     ->where('idprofesional', '=', $idprofesional)
                     ->where('parent_id','=', NULL)
                     ->get();*/

        //

        return ['mensajes' => $mensajes];
    }

   
    public function enviar(Request $request)
    {
        
        

    }

  
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
