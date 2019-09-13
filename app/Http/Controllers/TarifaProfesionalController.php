<?php

namespace App\Http\Controllers;
use App\TarifaProfesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TarifaProfesionalController extends Controller
{

    public function list(Request $request)
    {
        

        $idusuario = Auth::user()->id;

        $tarifas = DB::table('usuarios')->join('tarifa_profesional', 'tarifa_profesional.idusuario', '=', 'usuarios.id')
                                        ->select('tarifa_profesional.*')
                                        ->where('usuarios.id', '=', $idusuario)
                                        ->get();

        return ['tarifas' => $tarifas];  


    }


    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {

       // return $id;

        $tarifa = TarifaProfesional::find($id);
        $tarifa->delete();

        return ['mensaje' => 'se elimino'];
        
    }
}
